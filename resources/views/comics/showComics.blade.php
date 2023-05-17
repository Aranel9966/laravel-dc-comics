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
      <button class="btn btn-danger"  data-bs-toggle="modal" data-bs-target="#exampleModal">elimina</button>
      

      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h2 class="modal-title fs-5" id="exampleModalLabel">Eliminazione fumetto</h2>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Vuoi veramente eliminare questo fumetto?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
              <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                @csrf
                @method('DELETE')

                <button class="btn btn-danger" type="submit">Elimina</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>

@endsection