@extends('layouts.app')

@section('content')

    @if (session('status'))
        <p>
            {{session('status')}}
        </p>
    @endif

    <a href="{{route('categories.create')}}">Aggiungi</a>

    <ul>
        @foreach ($categories as $category)
            <li>
                {{$category->name}}
                {{$category->slug}}
                <a href="{{route('categories.show', ['category' => $category->id])}}">Vedi</a>
                <a href="{{route('categories.edit', ['category' => $category->id])}}">Modifica</a>
                <form action="{{route('categories.destroy', ['category' => $category->id])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Cancella</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
