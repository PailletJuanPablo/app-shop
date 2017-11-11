<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
class ProductImage extends Model
{
    //$images->product;

    public function product(){
        return $this->belongsTo(Product::class);
    }

    
}
