<!--In this line exdends default pages /layout page ways inside page-->
@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="jumbotron">
<h5>Hello, New Test Laravel Page Created</h5>
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
                        <a class="nav-link " href="/">Home</a>
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
@endsection


