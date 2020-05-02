<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Apartment;
use App\Service;
use App\Sponsor;
use App\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SearchController extends Controller
{
  public function home()
  {
    $now = Carbon::now(+2);
    $orders = Order::where('sponsor_due_date', '>', $now)->get('apartment_id');
    $sponsorized_apts = Apartment::whereIn('id', $orders)->get();
    return view('welcome', compact('sponsorized_apts'));
  }
  public function index()
  {
    $services = Service::all();
    return view('index', compact('services'));
  }
  public function show($id)
  {
    $services = Service::all();
    $apartment = Apartment::find($id);
    $apartment->increment('views');
    if (empty($apartment)) {
      abort('404');
    }
    return view('show', compact('apartment'));
  }
}
