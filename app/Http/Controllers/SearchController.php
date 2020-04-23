<?php

namespace App\Http\Controllers;
use App\Apartment;
use App\Service;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function home()
    {

    return view('welcome');

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

      if(empty($apartment)) {
          abort('404');
      }
      return view ('show', compact('apartment'));

    }
}
