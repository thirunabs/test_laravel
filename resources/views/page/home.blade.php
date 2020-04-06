<!--In this line exdends default pages /layout page ways inside page-->
@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="jumbotron">
@if ($hours < 12)
  <p class="lead">Good Morning! {{$hours}}</p>
@elseif ($hours < 5)
  <p class="lead">Good Afternoon! {{$hours}}</p> 
@else
<p class="lead">Good Evening! {{$hours}}</p> 
@endif
    <h5>Hello, New Test Laravel Page Created</h5>
   
    <h1 class="display-4">Hello, world! {{ $name }}</h1>
    <p class="lead">{{$disp}}</p>
    <hr class="my-4">
    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>

  </div>

  <div class="card-deck">
  <div class="card">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTnBM__mf0w2C6Gd9oK3W8j3QWss2qhBIsRPhXBh1mX3o1cqX2t&usqp=CAU" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTnBM__mf0w2C6Gd9oK3W8j3QWss2qhBIsRPhXBh1mX3o1cqX2t&usqp=CAU" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTnBM__mf0w2C6Gd9oK3W8j3QWss2qhBIsRPhXBh1mX3o1cqX2t&usqp=CAU" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
@endsection


