<?php

namespace App\Http\Controllers;

use App\Product;
use App\Http\Requests;
use Illuminate\Http\Request;

class ProductCatalogueController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('catalogue.index', compact('products'));
    }
}
