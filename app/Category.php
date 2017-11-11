<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
class Category extends Model
{
    //esto permitira 
    //$category->products;
    public function products(){
        return $this->hasMany(Product::class);
    }
}
