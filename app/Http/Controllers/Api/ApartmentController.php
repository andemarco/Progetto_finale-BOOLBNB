<?php

namespace App\Http\Controllers\Api;

use App\Apartment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
  public function getAllApartment()
  {
    if (Apartment::where('published', '1')->exists()) {
      $apartments = Apartment::where('published', '1')->get()->toJson(JSON_PRETTY_PRINT);
      return response($apartments, 200);
    } else {
      return response()->json([
        "message" => "apartments not found"
      ], 404);
    }
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
