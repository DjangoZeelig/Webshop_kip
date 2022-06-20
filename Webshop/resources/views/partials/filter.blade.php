@isset($categories)
    <ul>
        @foreach ($categories as $category)
            <li>
                <a href="{{ route('store.index', ['category', $category->id]) }}">{{ $category->name }}</a>
            </li>
        @endforeach
    </ul>
@endisset
