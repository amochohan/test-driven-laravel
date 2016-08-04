<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;

class CartController extends Controller
{
    public function store(Request $request)
    {
        $product = Product::findOrFail($request->input('product'));

        \Auth::user()->cart->add($product);

        return redirect()->route('cart.show');
    }
}
