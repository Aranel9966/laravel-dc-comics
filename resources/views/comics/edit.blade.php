@extends('layouts/layout')
@section('content')
<form class="p-3 d-flex flex-column gap-3" action="{{route('comics.update',$comic->id)}}" method="POST">
    @csrf
    @method('PUT')
    <h2 >Modifica un fumetto</h2>
    <div>
        <label for="title">title</label>
        <input class="  form-control @error('title') is-invalid @enderror" type="text" id='title' name="title" value="{{old('title')??$comic->title}}">

    @error('title')
        <div class="invalid-feedback">
          {{$message}}
        </div>
      @enderror
    </div>
    <div>
        <label for="description">description</label>
        <textarea  class="form-control @error('description') is-invalid @enderror" type="text" id='description' name="description"  cols="50" rows="2">{{old('description')??$comic->description}}</textarea>

    @error('description')
        <div class="invalid-feedback">
          {{$message}}
        </div>
      @enderror
    </div>
    <div>
        <label for="thumb">thumb</label>
        <input class="form-control @error('thumb') is-invalid @enderror" type="text" id='thumb' name="thumb" value="{{old('thumb')??$comic->thumb}}">

    @error('thumb')
        <div class="invalid-feedback">
          {{$message}}
        </div>
      @enderror
    </div>
    <div>
        <label for="price">price</label>
        <input class="form-control @error('price') is-invalid @enderror" type="text" id='price' name="price"value="{{old('price')??$comic->price}}">

    @error('price')
        <div class="invalid-feedback">
          {{$message}}
        </div>
      @enderror
    </div>
    <div>
        <label for="series">series</label>
        <input class="form-control @error('series') is-invalid @enderror" type="text" id='series' name="series" value="{{old('series')??$comic->series}}">

    @error('series')
        <div class="invalid-feedback">
          {{$message}}
        </div>
      @enderror
    </div>
    <div>
        <label for="sale_date">sale_date</label>
        <input class="form-control @error('sale_date') is-invalid @enderror" type="date" id='sale_date' name="sale_date" value="{{old('sale_date')??$comic->sale_date}}">

    @error('sale_date')
        <div class="invalid-feedback">
          {{$message}}
        </div>
      @enderror
    </div>
    <div>
        <label for="type">type</label>
        <input class="form-control @error('type') is-invalid @enderror" type="text" id='type' name="type" value="{{old('type')??$comic->type}}">

    @error('type')
        <div class="invalid-feedback">
          {{$message}}
        </div>
      @enderror
    </div>
    <div>
        <label for="artists">artists</label>
        <input class="form-control @error('artists') is-invalid @enderror" type="text" id='artists' name="artists" value="{{old('artists')??$comic->artists}}">

    @error('artists')
        <div class="invalid-feedback">
          {{$message}}
        </div>
      @enderror
    </div>
    <div>
        <label for="writers">writers</label>
        <input class="form-control @error('writers') is-invalid @enderror" type="text" id='writers' name="writers" value="{{old('writers')??$comic->writers}}">

    @error('writers')
        <div class="invalid-feedback">
          {{$message}}
        </div>
      @enderror
    </div>
    <div>
        <button class="btn btn-primary" type="submit">salva</button>
    </div>
</form>
@endsection