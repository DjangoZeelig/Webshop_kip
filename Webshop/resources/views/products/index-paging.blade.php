@extends('layouts.master')

@section('content')
<h1>Products</h1>

{{-- <p>
    <a class="btn btn-primary" href="/products/create"><span class="glyphicon glyphicon-plus"></span> Add Product</a>
</p> --}}

<table class="table table-bordered table-hover">
    <thead>
        <th>Category</th>
        <th>Name</th>
        <th>Price</th>
        <th>Color</th>
        <th>Size</th>
        <th>Population</th>
        <th>Description</th>
    </thead>
    <tbody>
        @if ($products->count() == 0)
        <tr>
            <td colspan="5">No products to display.</td>
        </tr>
        @endif

        @foreach ($products as $product)
        <tr>
            <td>{{ $product->category->name ?? 'None' }}</td>
            <td>{{ $product->name }}</td>
            <td>${{ $product->price }}</td>
            <td>{{ $product->color }}</td>
            <td>{{ $product->size }}</td>
            <td>{{ $product->population }}</td>
            <td>{{ $product->description }}</td>
            {{-- <td>
                <a class="btn btn-sm btn-success" href="{{ action('ProductsController@edit', ['id' => $product->id]) }}">Edit</a>

                <form style="display:inline-block" action="{{ action('ProductsController@destroy', ['id' => $product->id]) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-sm btn-danger"> Delete</button>
                </form>
            </td> --}}
        </tr>
        @endforeach
    </tbody>
</table>

{{ $products->links() }}

<p>
    Displaying {{$products->count()}} of {{ $products->total() }} product(s).
</p>

@endsection
