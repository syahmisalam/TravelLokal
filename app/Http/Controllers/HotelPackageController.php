<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HotelPackage;

class HotelPackageController extends Controller
{
    public function index()
    {
        $hotel_packages = HotelPackage::with('galleries')->get();

        return view('hotel_packages.index', compact('hotel_packages'));
    }

    public function show(HotelPackage $hotel_package)
    {
        $hotel_packages = HotelPackage::where('id', '!=', $hotel_package->id)->get();

        return view('hotel_packages.show', compact('hotel_package', 'hotel_packages'));
    }
}
