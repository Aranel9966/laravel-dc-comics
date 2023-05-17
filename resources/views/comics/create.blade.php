@extends('layouts/layout')
@section('content')
<h2>Aggiungi un fumetto</h2>
<form class="p-3 d-flex flex-column gap-3" action="{{route('comics.store')}}" method="POST">
    @csrf
    <div>
        <label for="title">title</label>
        <input type="text" id='title' name="title">
    </div>
    <div>
        <label for="description">description</label>
        <input type="text" id='description' name="description">
    </div>
    <div>
        <label for="thumb">thumb</label>
        <input type="text" id='thumb' name="thumb">
    </div>
    <div>
        <label for="price">price</label>
        <input type="text" id='price' name="price">
    </div>
    <div>
        <label for="series">series</label>
        <input type="text" id='series' name="series">
    </div>
    <div>
        <label for="sale_date">sale_date</label>
        <input type="date" id='sale_date' name="sale_date">
    </div>
    <div>
        <label for="type">type</label>
        <input type="text" id='type' name="type">
    </div>
    <div>
        <label for="artists">artists</label>
        <input type="text" id='artists' name="artists">
    </div>
    <div>
        <label for="writers">writers</label>
        <input type="text" id='writers' name="writers">
    </div>
    <div>
        <button class="btn btn-primary" type="submit">salva</button>
    </div>
</form>
@endsection
