@extends('layouts.master')

@section('content')
<table class="table table-striped table-bordered" border="1px solid black">
    <thead>
        <tr>
            <th>Id</th>
            <th>Category_id</th>
            <th>Name</th>
            <th>Price</th>
            <th>Color</th>
            <th>Size</th>
            <th>Population</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
            <td>{{$product->id}}</td>
            <td>{{$product->category_id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->color}}</td>
            <td>{{$product->size}}</td>
            <td>{{$product->population}}</td>
            <td>{{$product->description}}</td>
        </tr>
        @endforeach
    </tbody>
    </table>
    @endsection
