@extends('layouts.app')

@section('title')
<title>Comics</title>
@endsection

@section('content')
<main>

<div class="container">
  <div class="row">
    <a href="{{route('comics.create')}}">Inserisci un nuovo fumetto</a>
  </div>
  <div class="row">
    @foreach ($comics as $key=> $comic)
    <div class="col-lg-2 card">
      <h4>{{$comic->title}}</h4>
      <h5>{{$comic->series}}</h5>
      <h6>Genre: {{$comic->type}}</h6>
      <p>In vendita da: {{$comic->sale_date}}</p>
      <a href="{{route('comics.show', ['comic' => $comic->id])}}">
          <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
      </a>
      <p>$ {{$comic->price}}</p>
      <!-- <p>{{$comic->description}}</p> -->
      <a href="{{route('comics.edit', ['comic' => $comic->id])}}">Modifica il fumetto</a>
    </div>
    @endforeach
  </div>
</div>

</main>
@endsection
