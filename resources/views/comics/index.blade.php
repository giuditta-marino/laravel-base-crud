@extends('layouts.app')

@section('title')
<title>Comics</title>
@endsection

@section('content')
<main>

<div class="container">
  <div class="row">
    @foreach ($comics as $key=> $comic)
    <div class="col-lg-2 card">
      <h4>{{$comic->title}}</h4>
      <h5>{{$comic->series}}</h5>
      <h6>Genre: {{$comic->type}}</h6>
      <p>In vendita da: {{$comic->sale_date}}</p>
      <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
      <p>$ {{$comic->price}}</p>
    </div>
    @endforeach
  </div>
</div>

</main>
@endsection
