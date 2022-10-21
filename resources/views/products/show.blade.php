@extends('layouts.app')

@section('content')
    <ul>
        <li>Name: {{$product->name}}</li>
        <li>Slug: {{$product->slug}}</li>
        <li>Price: {{$product->price}}</li>
        <li>Category: {{$product->category?$product->category->name:'-'}}</li>
    </ul>

    <div>
        <h2>Ordini</h2>

        <ul>
            @foreach ($product->orders as $order)
                <li>
                    {{$order->id}}
                    {{$order->code}}
                </li>
            @endforeach
        </ul>
    </div>
@endsection
