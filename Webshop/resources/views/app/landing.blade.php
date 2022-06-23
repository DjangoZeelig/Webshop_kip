<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>



    <!-- Styles -->

    <link href=" {{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>

</head>
{{-- <a type="button" href="{{ route('store.index') }}"> Store </a> --}}
<body>
<section class="landingHeader">
    <h1>Villa KippenZicht</h1>
    <p>Duurzame woningen voor de moderne kip</p>
    <a class="nav-link" href="{{ route('store.index') }}">
        <button class="GTS">
        Bekijk al onze kippenwoningen
        </button>
    </a>
</section>

<section style="background-color: #eee;">
    <div class="container py-5">
      <h4 class="text-center mb-5"><strong>Onze bestsellers</strong></h4>


<ul class="cards">
    @foreach($products as $product)
    <li class="cards__item">
        <div class="card">
            <div class="card__image card__image--a"></div>
            <div class="card__content">
                <div class="card__title">{{$product->name}}</div>
                <p class="card__text">
                <ul>
                    <li>Price: ${{$product->price}},-</li>
                    <li>Color: {{$product->color}}</li>
                    <li>Size: {{$product->size}}</li>
                    <li>Population: {{$product->population}}</li>
                    <li>Description: {{$product->description}}</li>
                </ul>
                </p>
                <button class="btn btn--block card__btn">Bekijk product</button>
            </div>
        </div>
    </li>
    <!-- <li class="cards__item">
        <div class="card">
            <div class="card__image card__image--b"></div>
            <div class="card__content">
                <div class="card__title">Kippenhok B</div>
                <p class="card__text">{{!!$product->name!!}}</p>
                <button class="btn btn--block card__btn">Button</button>
            </div>
        </div>
    </li>
    <li class="cards__item">
        <div class="card">
            <div class="card__image card__image--c"></div>
            <div class="card__content">
                <div class="card__title">Kippenhok C</div>
                <p class="card__text">{{!!$product->name!!}}</p>
                <button class="btn btn--block card__btn">Button</button>
            </div> -->

    @endforeach
    <!-- </div>
    </li> -->

</div>
</div>
</div>
</div>
</section>


<div class= "landingFooter">
<div class="container py-5">

    <footer class="bg-light text-center text-white">
    <!-- Grid container -->
    <div class="container p-6 pb-0">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a
          class="btn btn-primary btn-floating m-1"
          style="background-color: #3b5998;"
          href="#!"
          role="button"
          ><i class="bi bi-facebook"></i
        ></a>

        <!-- Twitter -->
        <a
          class="btn btn-primary btn-floating m-1"
          style="background-color: #55acee;"
          href="#!"
          role="button"
          ><i class="bi bi-twitter"></i
        ></a>

        <!-- Google -->
        <a
          class="btn btn-primary btn-floating m-1"
          style="background-color: #dd4b39;"

          role="button"
          ><i class="bi bi-google"></i
        ></a>

        <!-- Instagram -->
        <a
          class="btn btn-primary btn-floating m-1"
          style="background-color: #ac2bac;"
          role="button"
          ><i class="bi bi-instagram"></i
        ></a>

        <!-- Linkedin -->
        <a
          class="btn btn-primary btn-floating m-1"
          style="background-color: #0082ca;"
          href="#!"
          role="button"
          ><i class="bi bi-linkedin"></i
        ></a>
        <!-- Github -->
        <a
          class="btn btn-primary btn-floating m-1"
          style="background-color: #333333;"
          href="#"
          role="button"
          ><i class="bi bi-github"></i
        ></a>
      </section>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2022 Copyright:
      <a class="text-white" href="#">VillaKippenZicht.com</a>
    </div>
    <!-- Copyright -->
  </footer>

  </div>
</div>

</body>
</html>
