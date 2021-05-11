<header>
    <div class="container">
        <div class="logo">
            <img src="{{ asset('img/molisana-logo.png') }}" alt="">
        </div>
        <nav class="navbar">
            <ul>
                <li class="{{Route::getCurrentRoute()->getName() == 'homepage' ? 'active' : ''}}"> <a href="{{route('homepage')}}">Home</a></li>
                <li class="{{Route::getCurrentRoute()->getName() == 'prodotto' ? 'active' : ''}}"> <a href="{{route('prodotto',['id' => 0] )}}">Prodotti</a></li>
                <li class="{{Route::getCurrentRoute()->getName() == 'news' ? 'active' : ''}}"><a href="{{route('news')}}">News</a></li>
            </ul>
        </nav>
    </div>
</header>