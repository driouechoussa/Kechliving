<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class HomeController extends Controller
{
    function Index() {

        // Define the default currency and bring the currency from the request
        $defaultCurrency = 'mad';
        // get the price value from Products model
        $price = Products::select('product_price')->get();

    
        // Fetch  products from the Products model
        $products = Products::limit(6)->get();

        $products_rel = Products::with('firstImage')->get();

        $property_type = [
            'appartement',
            'villa' ,
            'riad',
        ];

        $cities = [
            'marrakech',
        ];

        $costs = [
            '5000',
            '10000',
            '15000',
        ];

        
        return view('index' ,
            [
                'products' => $products,
                'defaultCurrency' => $defaultCurrency,
                'property_type' => $property_type,
                'cities' => $cities,
                'costs' => $costs,
            ]
        );
    }
}
