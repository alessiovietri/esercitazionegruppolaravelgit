@extends('layout.layout')

@section('title', 'Aggiungi prodotto')

@section('content')
    <form action="{{route('products.store')}}" method="POST">
        @csrf

        <label for="name">Name</label>
        <input type="text" name="name" id="name">

        <label for="slug">Slug</label>
        <input type="text" name="slug" id="slug">

        <label for="price">Price</label>
        <input type="number" name="price" id="price">

        <button type="submit">Submit</button>

    </form>
@endsection
