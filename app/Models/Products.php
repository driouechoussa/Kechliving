<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product_images;

class Products extends Model
{
    function products_items()
    {
        return $this->hasMany(Product_images::class, 'product_id', 'id');
    }

    function firstImage()
    {
        return $this->hasOne(Product_images::class, 'product_id', 'id')->orderBy('id', 'asc');
    }
};