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
        return view('product_overview', 
            [
                'product' => $product,
                'imgs' => $productImages,
            ]
    );
    }
}
