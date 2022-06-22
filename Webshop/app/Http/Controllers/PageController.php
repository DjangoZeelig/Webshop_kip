<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class PageController extends Controller
{
    function showLandingPage()
    {
        $products = Product::where("highlighted", 1)->get();
        return view('app.landing', compact('products'));
    }

    public function index($field = null, $value = null)
    {
        if ($field == 'category') {
            $category = Category::findOrFail($value);
            $products = $category->products()->get();
        }
        elseif($field == 'highlighted' && $value == '1') {
            $products = new Product;
            $products = $products->highlighted()->get();
        }
        else {
            $products = Product::get();
        }


        $categories = Category::all();

        $cart = session()->get('cart');
        if ($cart == null)
            $cart = [];

        return view('app.landing')->with('products', $products)->with('cart', $cart)->with('categories', $categories);
    }

    public function addToCart(Request $request)
    {
    session()->put('cart', $request->post('cart'));

    return response()->json(['success' => 'Product added to cart successfully!']);
    }
}

