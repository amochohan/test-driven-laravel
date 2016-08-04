<?php

namespace App\Http\Controllers;

use App\Product;
use App\Http\Requests;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('product.show', compact('product'));
    }
}
