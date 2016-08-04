@extends('layouts.website')

@section('content')

    <h1>Your cart</h1>

    <p>Total items: {{ $cart->products()->count() }}</p>

    <ul>
        @foreach ($cart->products as $product)
            <li>{{ $product->name }}</li>
        @endforeach
    </ul>

@endsection