<?php

namespace App\Http\Controllers\Api;

use App\Apartment;
use App\Service;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
  protected $apartments;
  public function __construct()
  {
    return $apartments = $this->apartments;
  }
  public function getAllApartment(Request $request)
  {
    $lat = $_GET['lat'];
    $lon = $_GET['lon'];
    $radius = $_GET['rad'];
    $apartments = Apartment::selectRaw("id,user_id, title, description,number_of_rooms, number_of_bath,number_of_beds, meters, address,price_for_night, image_path, published, created_at, updated_at, latitude, longitude,
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
      ->limit(20)
      ->get();
    $typeRequest = [
      'number_of_bath',
      'number_of_rooms',
      'number_of_beds',
      'meters',
      'price_for_night',
    ];
    $data = $request->all();
    // if ($data->has('services')) {
    //   $services = $data['services'];
    //   $apartamentsFiltered = Apartment::whereHas('services', function ($check) use ($services) {
    //     $check->whereIn('services . id', $services);
    //   },  count($services))->get();
    $apartmentsFiltered = [];

    
    foreach ($data as $key => $value) {
      if (!in_array($key, $typeRequest)) {
        unset($data[$key]);
      }
    }


    if (!empty($data)) {
      foreach ($data as $key => $value) {
        //se siamo al primo giro uso students
        if (array_key_first($data) == $key) {
          $apartmentsFiltered = $this->filterFor($key, $value, $apartments);
        }
        //in tutti gli altri casi uso studentsFiltered
        else {
          $apartmentsFiltered = $this->filterFor($key, $value, $apartmentsFiltered);
        }
      }
      return response()->json($apartmentsFiltered);
    } else {
      return response()->json($apartments);
    }
  }

  
  private function filterFor($type, $value, $array)
  {
    $filtered = [];
    foreach ($array as $element) {
      if ($element[$type] == $value) {
        $filtered[] = $element;
      }
    }
    return $filtered;
  }
}
