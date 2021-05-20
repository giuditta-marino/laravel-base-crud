@extends('layouts/app')

section('title')
<title>Home</title>
@endsection

<a href="{{route('comics.index')}}">Clicca qui per vedere la lista dei fumetti disponibili</a>
