<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class VillasController extends Controller
{
    public function Villas(Request $request) {
        
        $productChecked = collect();
        $propertyLocation = $request->input('property_location');
        $propertyType = $request->input('property_type');
        $checkIn = $request->input('date_checkin');
        $checkOut = $request->input('date_checkout');

        if (request()->all()) {   
            if($request->input('property_cost') == 5000) {
                $productChecked = Products::whereBetween('product_price' , [5000 , 10000])
                                        ->where('product_location', $propertyLocation)
                                        ->where('product_category', $propertyType)->get();
            } 
            
            elseif($request->input('property_cost') == 10000) {
                $productChecked = Products::whereBetween('product_price' , [10000 , 15000])
                                        ->where('product_location', $propertyLocation)
                                        ->where('product_category', $propertyType)->get();
            }

             elseif($request->input('property_cost') == 15000) {
                $productChecked = Products::whereBetween('product_price' , [15000 , 20000])
                                        ->where('product_location', $propertyLocation)
                                        ->where('product_category', $propertyType)
                                        ->whereDate('available_from', '<=', $checkIn)
                                        ->whereDate('available_to', '>=', $checkOut)->get();
            }
        }else {
           $productChecked = Products::all();
        }
        return view('villas',
        [
            'products' => $productChecked,
        ]
        );
    }
}
