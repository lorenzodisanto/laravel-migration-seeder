<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index()
    {
        // tutti i treni
        //  $trains = Train::all();

        // treni che partono oggi
        $trains = Train::whereDate("departure_date", now() )->get();

        return view('home', compact('trains'));
    }
}
