@extends('layouts.app')

@section('title', 'Modifica prodotto')

@section('content')

    @if ($errors->any())
        <div class="alert alert-warning">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('products.update', ['product' => $product->id])}}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Name</label>
        <input type="text" name="name" id="name" required value="{{old('name', $product->name)}}">

        <label for="slug">Slug</label>
        <input type="text" name="slug" id="slug" required value="{{old('slug', $product->slug)}}">

        <label for="price">Price</label>
        <input type="number" name="price" id="price" value="{{old('price', $product->price)}}">

        <select name="category_id" id="category_id">
            <option value="">Nessuna Categoria</option>
            @foreach ($categories as $category)
                <option {{($product->category_id!== null && $product->category_id==$category->id)?'selected':''}} value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>

        <button type="submit">Save</button>

    </form>
@endsection
