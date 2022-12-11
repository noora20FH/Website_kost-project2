<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function location()
    {
        return view('layouts.location', [
            "title" => "LOCATION"
        ]);
    }

    // public function locationCustomer()
    // {
    //     return view('layouts.locationCustomer', [
    //         "title" => "LOCATION CUSTOMER"
    //     ]);
    // }
    // public function locationOwner()
    // {
    //     return view('layouts.locationOwner', [
    //         "title" => "LOCATION OWNER"
    //     ]);
    // }
    
}
