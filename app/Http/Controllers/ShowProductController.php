<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ShowProductController extends Controller
{
    public function PropertyShow($id)
    {
        $product = Products::findOrFail($id);
        $productImages = Products::with('products_items')->findOrFail($id);
        
        $Random_Products = Products::inRandomOrder()->limit(3)->get();

        return view('product_overview', 
            [
                'product' => $product,
                'imgs' => $productImages,
                'randomly_products' => $Random_Products
            ]
    );
    }
}
