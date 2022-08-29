<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;

class HomeController extends Controller
{
    public function index(){

        $trips = Trip::where('is_available', '=', 1)->get();

        $data = [
            'trips' =>  $trips
        ];

        return view('home', $data);
    }
}
