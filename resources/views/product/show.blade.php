@extends('layouts.website')

@section('content')

    <h1>{{ $product->name }}</h1>

    <p>{{ $product->description }}</p>

    <img src="{{ $product->image }}" />

    <p>Price: &pound;{{ $product->price }}</p>

@endsection