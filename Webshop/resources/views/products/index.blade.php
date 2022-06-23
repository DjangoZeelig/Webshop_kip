@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row">
        <h3><strong>{{$product->name}}</strong></h3>
        <div class="col-md-7">
            <a href="#">
                <img class="img-fluid rounded mb-3 mb-md-0"
                    src="https://images.unsplash.com/photo-1628160931194-6a03fff1e839?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2940&q=80"
                    alt="">
            </a>
        </div>
        <div class="col-md-5">
<ul>


            <li>{{$product->price}}</li>
            <li>{{$product->color}}</li>
            <li>{{$product->size}}</li>
            <li>{{$product->population}}</li>
            <li>{{$product->description}}</li>
</u>
            <a class="btn btn-secondary" href="#">Order product</a>
        </div>
    </div>

    <!-- <table class="table table-dark table-striped table-hover" border="1px solid black">
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

            <td>{{$product->id}}</td>
            <td>{{$product->category_id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->color}}</td>
            <td>{{$product->size}}</td>
            <td>{{$product->population}}</td>
            <td>{{$product->description}}</td>
            </tr>

        </tbody>
    </table> -->
    @endsection
