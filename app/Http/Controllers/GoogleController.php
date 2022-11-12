<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GoogleController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()

    {
        $locations = [
            ['Dhaka', 23.8103,90.4125],
            ['CTG', 22.3569,91.7832],
            ['Feni ', 23.0159,91.3976],
            ['Sylhet', 24.8949,91.8687],
            ['Delhi', 28.7041,77.1025],
        ];
        return view('googleAutocomplete',compact('locations'));

    }
}
