<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Products;

class Product_images extends Model
{
    function productsImages()
    {
        return $this->belongsTo(Products::class , 'product_id', 'id');
    }
}
