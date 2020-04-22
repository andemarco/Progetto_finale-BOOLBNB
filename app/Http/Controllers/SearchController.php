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
}
