<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        {{-- Font-awesome --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
        
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