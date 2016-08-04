@extends('layouts.website')

@section('content')

    <h1>{{ $product->name }}</h1>

    <p>{{ $product->description }}</p>

    <img src="{{ $product->image }}" />

    <p>Price: &pound;{{ $product->price }}</p>

    <!-- Add to cart form -->
    <form method="post" id="add-to-cart" name="add_to_cart" action="{{ route('cart.store') }}">

        {{ csrf_field() }}

        <input type="hidden" name="product" value="{{ $product->id }}" />

        <!-- Submit button -->
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Add to cart</button>
        </div>

    </form>

@endsection