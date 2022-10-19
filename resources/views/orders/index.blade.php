@extends('layouts.app')

@section('content')

    @if (session('status'))
        <p>
            {{session('status')}}
        </p>
    @endif

    <a href="{{route('orders.create')}}">Aggiungi</a>

    <ul>
        @foreach ($orders as $order)
            <li>
                {{$order->code}}
                {{$order->shipping_address}}
                <a href="{{route('orders.show', ['order' => $order->id])}}">Vedi</a>
                <a href="{{route('orders.edit', ['order' => $order->id])}}">Modifica</a>
                <form action="{{route('orders.destroy', ['order' => $order->id])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Cancella</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
