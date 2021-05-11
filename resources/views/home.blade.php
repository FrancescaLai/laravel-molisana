@extends('layouts.main')

@section('pageTitle')
    Home Page La Molisana | Sito Officiale
@endsection

@section('content')

<div class="home-background">

    <div class="container">
        <section>
            <h2>LE LUNGHE</h2>
            <div class="cards">
                @foreach ($lunghe as $pasta)
                <div class="card">
                   <a href="{{route('prodotto', ['id' => $pasta['id'] ])}}"><img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}"></a> 
                </div>
                @endforeach
            </div>
        </section>

        <section>
            <h2>LE CORTE</h2>
            <div class="cards">
                @foreach ($corte as $pasta)
                <div class="card">
                    <a href="{{route('prodotto', ['id' => $pasta['id'] ])}}"><img src="{{$pasta['src']}}"></a> <img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}">
                </div>
                @endforeach
            </div>
        </section>

        <section>
            <h2>LE CORTISSIME</h2>
            <div class="cards">
                @foreach ($cortissime as $pasta)
                <div class="card">
                   <a href="{{route('prodotto', ['id' => $pasta['id'] ])}}"><img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}"></a> 
                </div>
                @endforeach
                </div>
        </section>
    </div>
</div>
@endsection