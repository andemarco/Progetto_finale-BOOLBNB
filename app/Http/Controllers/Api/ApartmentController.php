<?php

namespace App\Http\Controllers\Api;

use App\Apartment;
use App\Service;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ApartmentController extends Controller
{
  public function getAllApartment(Request $request)
  {
    $apartment = Apartment::query();
    $apartments = new Apartment;
    $radius = (int) $request['radius'] ?: 20;
    if ($request->has('lat') && $request['lat'] !== 'null' && $request->has('long') && $request['long'] !== 'null') {
      $lat = $request['lat'];
      $lon = $request['long'];
      $radius = $request['rad'];
      $apartments =  $apartment->selectRaw("id,user_id, title, description,number_of_rooms, number_of_bath,number_of_beds, meters, address,price_for_night, image_path, published, created_at, updated_at, latitude, longitude,
         ( 6371000 * acos( cos( radians(?) ) *
           cos( radians( latitude ) )
           * cos( radians( longitude ) - radians(?)
           ) + sin( radians(?) ) *
           sin( radians( latitude ) ) )
         ) AS distance", [$lat, $lon, $lat])
        ->having("distance", "<", $radius)
        ->having("published", '1')
        ->orderBy("distance", 'asc')
        ->offset(0)
        ->limit(20);
    }
    // filtering by room number
    if ($request->has('rooms') && $request['rooms'] !== 'null') {
      $apartments = $apartment->where('number_of_rooms', '=', $request['rooms']);
    }
    // filtering by beds number
    if ($request->has('beds') && $request['beds'] !== 'null') {
      $apartments = $apartment->where('number_of_beds', '=', $request['beds']);
    }
    // filtering by bath number
    if ($request->has('bath') && $request['bath'] !== 'null') {
      $apartments = $apartment->where('number_of_bath', '=', $request['bath']);
    }
    // filtering by price
    if ($request->has('price') && $request['price'] !== 'null') {
      $apartments = $apartment->where('price_for_night', '<=', $request['price']);
    }
    // filter by services
    if (!empty($request['services'])) {
      foreach ($request['services'] as $service) {
        $apartments = $apartment->whereHas('services', function ($query) use ($service) {
          $query->where('id', $service);
        });
      }
    }
    $apartmentsFiltered = $apartments->get();
    return response()->json($apartmentsFiltered);
  }
}
