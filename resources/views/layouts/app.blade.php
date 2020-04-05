<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Test Laravel  - @yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!-- Styles -->
        
    </head>
    <body class="dark bg-dark">
    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
       <!-- <a class="navbar-brand"  href="https://winways.co.in" target=" _blank">Our website</a>
        <a class="navbar-brand"  href="/">Home</a>
        <a class="navbar-brand"  href="abouts">Abouts Us</a>
        <a class="navbar-brand"  href="contact">Contact</a>-->
        <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link " href="https://winways.co.in">Our website</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="abouts">About Us</a>
                    </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
    </nav>
           
            <div class="container  mt-1">
                @yield('content')
            </div>      
            <div class="container">
            <nav class="fixed-bottom bg-light" >
                <a class="navbar-brand" href="#">All rights thiru</a>
            </nav>
            </div>  
       
       
    </body>
</html>
