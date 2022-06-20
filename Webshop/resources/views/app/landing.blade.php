@extends('layouts.master')
@section('content')
<ul class="cards">
    @foreach($products as $product)
    <li class="cards__item">
        <div class="card">
            <div class="card__image card__image--a"></div>
            <div class="card__content">
                <div class="card__title">Kippenhok A</div>
                <p class="card__text">{{ $product->name }}</p>
                <button class="btn btn--block card__btn">Button</button>
            </div>
        </div>
    </li>
    <li class="cards__item">
        <div class="card">
            <div class="card__image card__image--b"></div>
            <div class="card__content">
                <div class="card__title">Kippenhok B</div>
                <p class="card__text">{{ $product->name }}</p>
                <button class="btn btn--block card__btn">Button</button>
            </div>
        </div>
    </li>
    <li class="cards__item">
        <div class="card">
            <div class="card__image card__image--c"></div>
            <div class="card__content">
                <div class="card__title">Kippenhok C</div>
                <p class="card__text">{{ $product->name }}</p>
                <button class="btn btn--block card__btn">Button</button>
            </div>
            @endforeach
        </div>
    </li>
    @endsection
