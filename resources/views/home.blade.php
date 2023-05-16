@extends('layouts/layout')

@section('content')
    <main>
    <h1>CURRENT SERIES</h1>

        <div class="container">
            <div class="row">
            @foreach ($comics as $singleComics)
                <div class="col-2 comics-card d-flex">
                    <div class="comics-card-inner">
                        <img src="{{$singleComics['thumb']}}" alt="immagine ">
                        {{$singleComics['title']}}
                    </div>
                </div>
            @endforeach
            </div>
        </div>
        <div class="container-btn">
        {{-- <AppBookshelf ></AppBookshelf> --}}
            <button > <a href ="prova">LOAD MORE</a> </button>
        </div>
    </main>
@endsection