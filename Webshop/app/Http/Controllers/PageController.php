<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PageController extends Controller
{
    function showLandingPage()
    {
        $products = Product::where("highlighted", 0)->get();
        return view('app.landing', compact('products'));
    }
}
