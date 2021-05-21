@extends('layouts.app')

@section('title')
<title>Modifica</title>
@endsection

@section('content')
<form class="" action="{{route('comics.update', ['comic' => $comic->id])}}" method="post">
  @csrf
  @method('PATCH')
  <input type="text" name="title" value="{{$comic->title}}" placeholder="Inserisci il titolo">
  <input type="text" name="description" value="{{$comic->description}}" placeholder="Inserisci una descrizione">
  <input type="text" name="thumb" value="{{$comic->thumb}}" placeholder="Inserisci il link dell'immagine di copertina">
  <input type="text" name="price" value="{{$comic->price}}" placeholder="Inserisci il prezzo">
  <input type="text" name="series" value="{{$comic->series}}" placeholder="Inserisci il titolo della serie">
  <input type="text" name="sale_date" value="{{$comic->sale_date}}" placeholder="Inserisci la data di vendita">
  <input type="text" name="type" value="{{$comic->type}}" placeholder="Inserisci il genere">
  <input type="submit" name="" value="Salva modifiche">
</form>
@endsection
