<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public function add(Product $product)
    {
        $this->products()->attach($product);
        return $this;
    }
}
