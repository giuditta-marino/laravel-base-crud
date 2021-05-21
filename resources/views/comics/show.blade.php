@section('title')
<title>Fumetto</title>
@endsection

@section('content')
<p>{{$comic->description}}</p>

<a href="{{route('comics.edit')}}">Modifica fumetto</a>

<a href="{{route('comics.destroy', ['comic' => $comic->id])}}">Cancella il fumetto</a>
@endsection
