<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!-- Styles -->
        
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content container pt-3" >
                <div class="title m-b-md">
                <h5>Hello, New Test Laravel Page Created</h5>
                </div>
                <div class="jumbotron">
  <h1 class="display-4">Hello, world!</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                
</div>
<div class="links">
                    
                    <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link " href="https://winways.co.in">Our website</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="abouts">About Us</a>
                    </li>
                    </ul>
                    
                </div>       
            </div>
        </div>
        
    </body>
</html>
