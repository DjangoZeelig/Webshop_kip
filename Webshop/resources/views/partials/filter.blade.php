{{-- @isset($categories)
    <ul>
        @foreach ($categories as $category)
            <li>
                <a href="{{ route('store.index', ['category', $category->id]) }}">{{ $category->name }}</a>
            </li>
        @endforeach
    </ul>
@endisset --}}

{{-- @isset($categories)
<ul class="nav justify-content-center">
    @foreach ($categories as $category)
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="{{ route('store.index', ['category', $category->id]) }}">{{ $category->name }}</a>
    </li>
    @endforeach

  </ul> --}}

{{-- @endisset --}}

@isset($categories)
 <div class="container categories topBotomBordersOut">
        @foreach ($categories as $category)
            <a href="{{ route('store.index', ['category', $category->id]) }}">{{ $category->name }}</a>
        @endforeach
    </div>
@endisset
{{--
@isset($categories)
<div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Dropdown button
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        @foreach ($categories as $category)
      <a class="dropdown-item" href="href="{{ route('app.landing', ['category', $category->id]) }}">{{ $category->name }}</a>
      <a class="dropdown-item" href="href="{{ route('app.landing', ['category', $category->id]) }}">{{ $category->name }}n</a>
      <a class="dropdown-item" href="href="{{ route('app.landing', ['category', $category->id]) }}">{{ $category->name }}</a>
      @endforeach
    </div>
  </div>
@endisset --}}
