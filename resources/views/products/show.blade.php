@extends('layouts.app')

@section('content')
    <a href="{{route('admin.products.index')}}">Tutti i prodotti</a>

    <ul>
        <li>Name: {{$product->name}}</li>
        <li>Slug: {{$product->slug}}</li>
        <li>Price: {{$product->price}}</li>
    </ul>
@endsection
