<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\CartController;
use App\Models\Category;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

        return view('store.index')->with('products', $products)->with('cart', $cart)->with('categories', $categories);
    }

    public function addToCart(Request $request)
    {
    session()->put('cart', $request->post('cart'));

    return response()->json(['success' => 'Product added to cart successfully!']);
    }
}
