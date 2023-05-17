@extends('layouts/layout')
@section('content')
<form class="p-3 d-flex flex-column gap-3" action="{{route('comics.update',$comic->id)}}" method="POST">
    @csrf
    @method('PUT')
    <h2 >Modifica un fumetto</h2>
    <div>
        <label for="title">Title</label>
        <input type="text" id='title' value="{{$comic->title}}" name="title">
    </div>
    <div>
        <label for="description">Description</label>
        <input type="text" id='description' value="{{$comic->description}}" name="description">
    </div>
    <div>
        <label for="thumb">Thumb</label>
        <input type="text" id='thumb' value="{{$comic->thumb}}" name="thumb">
    </div>
    <div>
        <label for="price">Price</label>
        <input type="text" id='price' value="{{$comic->price}}" name="price">
    </div>
    <div>
        <label for="series">Series</label>
        <input type="text" id='series' value="{{$comic->series}}" name="series">
    </div>
    <div>
        <label for="sale_date">Sale_date</label>
        <input type="date" id='sale_date' value="{{$comic->sale_date}}" name="sale_date">
    </div>
    <div>
        <label for="type">Type</label>
        <input type="text" id='type' value="{{$comic->type}}" name="type">
    </div>
    <div>
        <label for="artists">Artists</label>
        <input type="text" id='artists' value="{{$comic->artists}}" name="artists">
    </div>
    <div>
        <label for="writers">Writers</label>
        <input type="text" id='writers' value="{{$comic->writers}}" name="writers">
    </div>
    <div>
        <button class="btn btn-primary" type="submit">salva</button>
    </div>
</form>
@endsection