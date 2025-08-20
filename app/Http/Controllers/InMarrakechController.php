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
