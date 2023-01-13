@php
    $menu = config('db.menu');
@endphp

<header>
    <div class="container">
        <div class="logo">
            <a href="/">
                <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="DC Logo">
            </a>
        </div>
        <nav>
            <ul>
                @foreach ($menu as $link)
                <li>
                    <a class="{{ Route::currentRouteName() === $link['route_name'] ? 'active' : '' }}"
                    href="{{ route($link['route_name']) }}">{{$link['text']}}</a>
                </li>

                @endforeach
            </ul>
        </nav>
    </div>
</header>
