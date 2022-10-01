@extends('layout.layout')

    @section('content')
        @foreach ($products as $product)

            <div>
                {{$product}}
            </div>
        @endforeach

    @endsection

