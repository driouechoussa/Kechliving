<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Http\Controllers\HomeController;

class InMarrakechController extends Controller
{
    function InMarrakech()
    {

        $products = Products::Paginate(12);


        $products_rel = Products::with('firstImage')->get();

        $city_property = [
            'marrakech' => 'marrakech',
            'casablanca' => 'casablanca',
            'rabat' => 'rabat',
            'fes' => 'fes',
            'agadir' => 'agadir',
            'tanger' => 'tanger',
            'essaouira' => 'essaouira',

        ];

        $type_property = [
            'villa' => 'villa',
            'appartement' => 'appartement',
            'riad' => 'riad',
            'maison' => 'maison',
            'terrain' => 'terrain',
        ];

        $objective_property = [
            'louer' => 'louer',
            'acheter' => 'acheter',    
        ];

       
        return view('inmarrakech' ,
            [
                'products' => $products,
                'products_rel' => $products_rel,
                'city_property' => $city_property,
                'type_property' => $type_property,
                'objective_property' => $objective_property,

            ]
        );
    }
}
