@extends('layout.layout')

@section('content')
    <a href="{{route('products.create')}}">Aggiungi</a>

    <ul>
        @foreach ($products as $product)
            <li>
                {{$product->name}}
                {{$product->slug}}
                {{$product->price}}
                <a href="{{route('products.show', ['product' => $product->id])}}">Vedi</a>
            </li>
        @endforeach
    </ul>
@endsection
