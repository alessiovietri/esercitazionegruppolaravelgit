@extends('layouts.app')

@section('title', 'Aggiungi prodotto')

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

    <form action="{{route('products.store')}}" method="POST">
        @csrf

        <label for="name">Name</label>
        <input type="text" name="name" id="name" required value="{{old('name')}}">

        <label for="slug">Slug</label>
        <input type="text" name="slug" id="slug" required value="{{old('slug')}}">

        <label for="price">Price</label>
        <input type="number" name="price" id="price" value="{{old('price')}}">

        <select name="category_id" id="category_id">
            <option value="" selected >Nessuna Categoria</option>
            @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
        <button  type="submit">Submit</button>

    </form>
@endsection
