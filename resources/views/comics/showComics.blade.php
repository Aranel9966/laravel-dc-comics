@extends('layouts/layout')


@section('content')

<main class="text-center">
  <img src="{{$comic->thumb}}" alt="comic">

  <hr>
  {{-- {{dd ($comic)}} --}}

  <h1>{{$comic->title}}</h1>

  <ul class="text-left">
    <li>
      Tipo: {{$comic->type}}
    </li>
    <li>
      Data di uscita: {{$comic->sale_date}}
    </li>
    <li>
      prezzo: {{$comic->price}}
    </li>
    <li>
      Serie: {{$comic->series}}
    </li>
  </ul>

  <p>
    {{$comic->description}}
  </p>
</main>

@endsection