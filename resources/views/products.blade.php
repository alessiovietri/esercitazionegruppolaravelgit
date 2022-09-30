@extends('layout.layout')

    @section('content')
        @foreach ($products as $product)
    
            <div>
                {{$product->name}} - 
                {{$product->slug}} - 
                {{$product->price}}
            </div>
        @endforeach
    
    @endsection

