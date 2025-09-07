<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
class inMarrakechController extends Controller
{
        function InMarrakech() {

           $products = Products::Paginate(12);
           $products_rel = Products::with('firstImage')->get();

           

            return view('Inmarrakech' ,
                [
                    'products' => $products,
                    'products_rel' => $products_rel,
                ]
            );
        }      
}
