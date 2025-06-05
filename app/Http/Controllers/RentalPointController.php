<?php

namespace App\Http\Controllers;

use App\Models\RentalPoint;
use Illuminate\Http\Request;

class RentalPointController extends Controller
{
    public function index()
    {
        $rentalPoints = RentalPoint::all();
        return view('map', compact('rentalPoints'));
    }
}
