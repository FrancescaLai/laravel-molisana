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
    <header>
        <div class="container">
            <div class="logo">
                <img src="{{ asset('img/molisana-logo.png') }}" alt="">
            </div>
            <nav class="navbar">
                <ul>
                    <li class="active"> <a href="">Home</a></li>
                    <li> <a href="">Prodotti</a></li>
                    <li><a href="">News</a></li>
                </ul>
            </nav>
        </div>
    </header>
    {{-- Header --}}

    {{-- Main --}}
    <main>
        <div class="small-container">
            <div class="box-pasta">
                <h3>LE LUNGHE</h3>
                
            </div>
        </div>      
    </main>
    {{-- Main --}}
    
</body>
</html>