@extends('layout.layout')

@section('content')
    <ul>
        <li>Name: {{$product->name}}</li>
        <li>Slug: {{$product->slug}}</li>
        <li>Price: {{$product->price}}</li>
    </ul>
@endsection
