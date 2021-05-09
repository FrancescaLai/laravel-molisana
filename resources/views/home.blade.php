<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    
    {{-- css --}}
    <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">
    <title>La Molisana</title>
</head>
<body>

    {{-- Header --}}
    @include('partials.header')
    {{-- Header --}}

    {{-- Main --}}
    <main>
        <div class="container">
            <section>
                <h2>LE LUNGHE</h2>
                <div class="cards">
                    @foreach ($lunghe as $pasta)
                    <div class="card">
                        <img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}">
                    </div>
                    @endforeach
                </div>
            </section>
            <section>
                <h2>LE CORTE</h2>
                <div class="cards">
                    @foreach ($corte as $pasta)
                    <div class="card">
                        <img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}">
                    </div>
                    @endforeach
                </div>
            </section>
            <section>
                <h2>LE CORTISSIME</h2>
                <div class="cards">
                    @foreach ($cortissime as $pasta)
                    <div class="card">
                        <img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}">
                    </div>
                    @endforeach
                </div>
            </section>
        </div>      
    </main>
    {{-- Main --}}

    {{-- Footer --}}
    @include('partials.footer')
    {{-- /Footer --}}

    
</body>
</html>