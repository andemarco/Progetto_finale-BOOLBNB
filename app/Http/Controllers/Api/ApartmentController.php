<?php

namespace App\Http\Controllers\Api;

use App\Apartment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
  protected $apartments;
  public function __construct()
  {
    return $apartments = $this->apartments;
  }
  public function getAllApartment()
  {
    $lat = $_GET['lat'];
    $lon = $_GET['lon'];
    $radius = 20000;
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
    return response()->json($apartments);
  }

   public function filterApartment(Request $request)
   {
     $apartments = Apartment::all();

     $typeRequest = [
      'number_of_bath',
      'number_of_rooms'
     ];

     $data = $request->all();

     foreach ($data as $key => $value) {
       if (!in_array($key, $typeRequest)) {
         unset($data[$key]);
       }
     }

     foreach ($data as $key => $value) {
       if (array_key_first($data) == $key) {
        return $apartmentsFiltered = $this->filterFor($key, $value, $apartments);
       } else {
        return $apartmentsFiltered = $this->filterFor($key, $value, $apartmentsFiltered);
       }
     }
     return response()->json($apartmentsFiltered);
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
