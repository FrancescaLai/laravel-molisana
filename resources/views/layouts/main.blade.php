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
        <title>@yield('pageTitle')</title>
    </head>
    <body>
        {{-- Header --}}
        @include('partials.header')
        {{-- Header --}}

        {{-- Main --}}
        <main>
            @yield('content') 
        </main>
        {{-- Main --}}

        {{-- Footer --}}
        @include('partials.footer')
        {{-- /Footer --}}        
    </body>
</html>