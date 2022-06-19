<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function indexPaging()
    {
        $products = Product::paginate(5);
        return view('products.index-paging')->with ('products', $products);
    }

    public function indexSorting()
    {
        $products = Product::sortable('')->paginate(5);
        return view('products.index-sorting')->with ('products', $products);
    }

    public function indexFiltering(Request $request)
{
    $filter = $request->query('filter');

    if (!empty($filter)) {
        $products = Product::sortable()
            ->where('products.name', 'like', '%'.$filter.'%')
            ->orWhere('products.price', 'like', '%'.$filter.'%')
            ->orWhere('products.color', 'like', '%'.$filter.'%')
            ->orWhere('products.size', 'like', '%'.$filter.'%')
            ->orWhere('products.population', 'like', '%'.$filter.'%')
            ->orWhere('products.description', 'like', '%'.$filter.'%')
            ->orWhere('products.highlighted', 'like', '%'.$filter.'%')
            ->orWhere('products.category_id', 'like', '%'.$filter.'%')
            ->paginate(5);
    } else {
        $products = Product::sortable()
            ->paginate(5);
    }

    return view('products.index-filtering')->with('products', $products)->with('filter', $filter);
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
