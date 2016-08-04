@extends('layouts.website')

@section('content')

    <h1>Product catalogue</h1>

    <p>
        Total products: {{ $products->count() }}
    </p>
    

@endsection