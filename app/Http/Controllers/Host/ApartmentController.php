<?php

namespace App\Http\Controllers\Host;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Apartment;
use App\Service;
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
            'number_of_rooms' => 'required|numeric',
            'number_of_bath' => 'required|numeric',
            'number_of_beds' => 'required|numeric',
            'meters' => 'required|numeric',
            'address' => 'required|string|max:255',
            'latitude'=> 'required|numeric|between:-90,90',
            'longitude'=> 'required|numeric|between:-180,180',
            'price_for_night' => 'required|numeric',
            'image_path' => 'image',
            'published' => 'required|boolean'
        ];
    }
    public function index()
    {
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
        $services = Service::all();
        $data = [
            'services'=> $services
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
        $userId = Auth::user()->id;
        $request->validate($this->validateData);
        $data = $request->all();

        $newApartment = new Apartment;
        $newApartment->user_id = $userId;
        $newApartment->number_of_rooms = $data['number_of_rooms'];
        $newApartment->number_of_beds = $data['number_of_beds'];
        $newApartment->number_of_bath = $data['number_of_bath'];
        $newApartment->meters = $data['meters'];
        $newApartment->address = $data['address'];
        $newApartment->latitude = $data['latitude'];
        $newApartment->longitude = $data['longitude'];
        $newApartment->price_for_night = $data['price_for_night'];
        $newApartment->image_path = Storage::disk('public')->put('images', $data['image_path']);
        $newApartment->published = $data['published'];

        $saved = $newApartment->save();
        
        if (!$saved) {
            return redirect()->back();
        }

        $services = $data['services'];
        if (!empty($services)) {
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
        $apartment = Apartment::find($id);

        if(empty($apartment)) {
            abort('404');
        } 
        return view ('host.apartments.show', compact('apartment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $services = Service::all();
        $apartment = Apartment::find($id);

        $data = [
            'services'=> $services,
            'apartment'=> $apartment,
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
        $userId = Auth::user()->id;
        $request->validate($this->validateData);
        $data = $request->all();

        $apartment->user_id = $userId;
        $apartment->number_of_rooms = $data['number_of_rooms'];
        $apartment->number_of_beds = $data['number_of_beds'];
        $apartment->number_of_bath = $data['number_of_bath'];
        $apartment->meters = $data['meters'];
        $apartment->address = $data['address'];
        $apartment->latitude = $data['latitude'];
        $apartment->longitude = $data['longitude'];
        $apartment->price_for_night = $data['price_for_night'];
        $apartment->image_path = Storage::disk('public')->put('images', $data['image_path']);
        $apartment->published = $data['published'];

        $updated = $apartment->update();
       
        
        if (!$updated) {
            return redirect()->back();
        }

        $services = $data['services'];
        if (!empty($services)) {
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

        $apartment->services()->detach();

        $apartment->delete();

        return redirect()->route('host.apartments.index')->with('delete', $apartment);
    }
}
