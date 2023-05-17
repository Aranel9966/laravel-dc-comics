@extends('layouts/layout')


@section('content')

<main class="d-flex p-3">
  <img style="height:500px" src="{{$comic->thumb}}" alt="comic">

  <hr>
  {{-- {{dd ($comic)}} --}}
  <div class="container-md d-flex flex-column gap-3">

    <h2>{{$comic->title}}</h2>
  
    <ul class="text-left d-flex flex-column gap-3">
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
    <h4>Descrizione:</h4>
    <p>
      {{$comic->description}}
    </p>
    <div class="btn d-flex gap-3">
      <a href="{{route('comics.edit',$comic->id)}}">
        <button class="btn btn-primary"> modifica </button>
      </a>
      <button class="btn btn-danger">elimina</button>
      
    </div>
  </div>

</main>

@endsection