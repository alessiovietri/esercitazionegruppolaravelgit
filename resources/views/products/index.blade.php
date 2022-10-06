@extends('layout.layout')

@section('content')
    <ul>
        @foreach ($products as $product)
            <li>
                {{$product->name}}
                {{$product->slug}}
                {{$product->price}}
            </li>
        @endforeach
    </ul>
@endsection