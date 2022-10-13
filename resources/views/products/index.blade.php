@extends('layouts.app')

@section('content')

@if (session('status'))
<p>
    {{session('status')}}
</p>
@endif

<a href="{{route('admin.products.create')}}">Aggiungi</a>

<ul>
    @foreach ($products as $product)
    <li>
        {{$product->name}}
        {{$product->slug}}
        {{$product->price}}
        <a href="{{route('admin.products.show', ['product' => $product->id])}}">Vedi</a>
        <a href="{{route('admin.products.edit', ['product' => $product->id])}}">Modifica</a>
        <form action="{{route('admin.products.destroy', ['product' => $product->id])}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Cancella</button>
        </form>
    </li>
    @endforeach
</ul>
@endsection
