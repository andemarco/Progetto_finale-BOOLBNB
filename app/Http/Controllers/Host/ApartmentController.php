<?php

namespace App\Http\Controllers\Host;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Apartment;
use App\Service;
use App\Sponsor;
use App\Order;
use Braintree;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class ApartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $validateData;
    public function __construct()
    {
        $this->validateData = [
            'title' => 'required|string|max:150',
            'description' => 'required|string|max:1500',
            'number_of_rooms' => 'required|numeric',
            'number_of_bath' => 'required|numeric',
            'number_of_beds' => 'required|numeric',
            'meters' => 'required|numeric',
            'address' => 'required|string|max:255',
            'latitude' => 'required|numeric|between:-90,90',
            'longitude' => 'required|numeric|between:-180,180',
            'price_for_night' => 'required|numeric',
            'image_path' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'published' => 'required|boolean'
        ];
    }
    public function index()
    {
        //prendo tutti gli appartamenti dello user loggato
        $apartments = Apartment::where('user_id', Auth::id())->get();
        return view('host.apartments.index', compact('apartments'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //prendo i servizi da inserire nella create
        $services = Service::all();
        $data = [
            'services' => $services
        ];
        return view('host.apartments.create', $data);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validateData = [
            'title' => 'required|string|max:150',
            'description' => 'required|string|max:1500',
            'number_of_rooms' => 'required|numeric',
            'number_of_bath' => 'required|numeric',
            'number_of_beds' => 'required|numeric',
            'meters' => 'required|numeric',
            'address' => 'required|string|max:255',
            'latitude' => 'required|numeric|between:-90,90',
            'longitude' => 'required|numeric|between:-180,180',
            'price_for_night' => 'required|numeric',
            'image_path' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'published' => 'required|boolean'
        ];
        //prendo user ID del loggato
        $userId = Auth::user()->id;
        $request->validate($this->validateData);
        //prendo i dati passati in request
        $data = $request->all();
        //se il request image è vuoto il path è null, diversamente o salvo
        if (empty($data['image_path'])) {
            $path = null;
        } else {
            $path = Storage::disk('public')->put('images', $data['image_path']);
        }
        //istanza nuovo appartamento
        $newApartment = new Apartment;
        $newApartment->user_id = $userId;
        $newApartment->title = $data['title'];
        $newApartment->description = $data['description'];
        $newApartment->number_of_rooms = $data['number_of_rooms'];
        $newApartment->number_of_beds = $data['number_of_beds'];
        $newApartment->number_of_bath = $data['number_of_bath'];
        $newApartment->meters = $data['meters'];
        $newApartment->address = $data['address'];
        $newApartment->latitude = $data['latitude'];
        $newApartment->longitude = $data['longitude'];
        $newApartment->price_for_night = $data['price_for_night'];
        $newApartment->image_path = $path;
        $newApartment->views = 0;
        $newApartment->published = $data['published'];
        $saved = $newApartment->save();
        if (!$saved) {
            return redirect()->back();
        }
        //salva l'appartamento sia con servizi che senza
        if (!empty($data['services'])) {
            $services = $data['services'];
            $newApartment->services()->attach($services);
        }
        return redirect()->route('host.apartments.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //prendo appartamento cercandolo con ID
        $apartment = Apartment::find($id);
        if (empty($apartment)) {
            abort('404');
        }
        //se user ID dell'appartamento non corrisponde con quello loggato, ERROR 403
        if ($apartment->user_id = Auth::user()->id) {
            return view('host.apartments.show', compact('apartment'));
        } else {
            abort('403', 'Accesso non autorizzato');
        }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //prendo tutti i servizi
        $services = Service::all();
        //prendo tutti gli appartamenti
        $apartment = Apartment::find($id);
        //inoltro tutto ad UPDATE con DATA
        $data = [
            'services' => $services,
            'apartment' => $apartment,
        ];
        return view('host.apartments.edit', $data);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Apartment $apartment)
    {
        //salvo user ID dello user LOGGATO
        $userId = Auth::user()->id;
        $request->validate($this->validateData);
        //prendo i dati passati in request
        $data = $request->all();
        //se il path image non viene cambiato, prendo quello già presente.
        if (empty($data['image_path'])) {
            $path = $apartment->image_path;
        } else {
            $path = Storage::disk('public')->put('images', $data['image_path']);
        }
        //istanza modifiche dell'appartamento
        $apartment->user_id = $userId;
        $apartment->number_of_rooms = $data['number_of_rooms'];
        $apartment->number_of_beds = $data['number_of_beds'];
        $apartment->number_of_bath = $data['number_of_bath'];
        $apartment->meters = $data['meters'];
        $apartment->address = $data['address'];
        $apartment->latitude = $data['latitude'];
        $apartment->longitude = $data['longitude'];
        $apartment->price_for_night = $data['price_for_night'];
        $apartment->image_path = $path;
        $apartment->published = $data['published'];
        $updated = $apartment->update();
        if (!$updated) {
            return redirect()->back();
        }
        //se i servizi sono cambiati, li SYNCO
        if (!empty($data['services'])) {
            $services = $data['services'];
            $apartment->services()->sync($services);
        }
        return redirect()->route('host.apartments.show', $apartment->id);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apartment $apartment)
    {
        if (empty($apartment)) {
            abort('404');
        }
        //elimino solo l'appartamento e "stacco" i servizi correlati.
        $apartment->services()->detach();
        $apartment->delete();
        return redirect()->route('host.apartments.index')->with('delete', $apartment);
    }
    public function chart()
    {
        //prendo i dati delle view e li giro in json a chart.
        $result = \DB::table('apartments')
            ->where('user_id', Auth::id())
            ->get();
        return response()->json($result);
    }
    public function sponsor($id)
    {
        //trovo l'appartamento tramite il suo ID
        $apartment = Apartment::find($id);
        //prendo tutti i tipi di sponsorizzazione
        $sponsors = Sponsor::all();
        //credo gateway per creare nuovo TOKEN
        $gateway = new Braintree\Gateway([
            'environment' => config('services.braintree.env'),
            'merchantId' => config('services.braintree.merchant_id'),
            'publicKey' => config('services.braintree.key'),
            'privateKey' => config('services.braintree.secret')
        ]);
        $token = $gateway->ClientToken()->generate();
        //inserisco tutto in data ed inoltro a sponsorstore per il salvataggio
        $data = [
            'apartment' => $apartment,
            'sponsors' => $sponsors,
            'token' => $token,
        ];
        return view('host.apartments.sponsor', $data);
    }
    public function sponsorstore(Request $request, $id)
    {
        //trovo appartamento tramite ID
        $apartment = Apartment::find($id);
        $data = $request->all();
        //se non hai passato nessuna sponsorizzazione, non puoi procedere
        if (!empty($data['sponsors'])) {
            $sponsor = Sponsor::find($data['sponsors']);
        } else {
            return redirect()->route('host.apartments.sponsor', $apartment->id)->with('no_insert', $apartment);
        }
        //istanza nuovo ordine
        $sponsor_id = $sponsor->id;
        $apartment_id = $apartment->id;
        $duration = $sponsor->duration;
        $orders = Order::where('apartment_id', $apartment_id)->get();
        $newOrder = new Order;
        $newOrder->apartment_id = $apartment_id;
        $newOrder->sponsor_id = $sponsor_id;
        $newOrder->sponsor_due_date = Carbon::now(+2)->addHour($duration);
        foreach ($orders as $order) {
            $sponsor_date = $order['sponsor_due_date'];
            if ($sponsor_date > Carbon::now(+2)) {
                return redirect()->route('host.apartments.sponsor', $apartment->id)->with('already_insert', $apartment);
            }
        }
        //nuovo gateway per salvare la transazione
        $gateway = new Braintree\Gateway([
            'environment' => config('services.braintree.env'),
            'merchantId' => config('services.braintree.merchant_id'),
            'publicKey' => config('services.braintree.key'),
            'privateKey' => config('services.braintree.secret')
        ]);
        //registro la transazione
        $result = $gateway->transaction()->sale([
            'amount' => $sponsor->price,
            'paymentMethodNonce' => $request['payment_method_nonce'],
            'customer' => [
                'email' => Auth::user()->email,
            ],
            'options' => [
                'submitForSettlement' => true
            ]
        ]);
        //se la transazione è ok, puoi salvare l'ordine
        if ($result->success) {
            $transaction = $result->transaction;
            $saved = $newOrder->save();
            if (!$saved) {
                abort('404');
            }
            return redirect()->route('host.apartments.index')->with('message', 'Transazione avvenuta con successo.');
        } else {
            return redirect()->back()->with('message', 'Pagamento non avvenuto.');
        }
    }
}
