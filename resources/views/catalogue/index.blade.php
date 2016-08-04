@extends('layouts.website')

@section('content')

    <h1>Product catalogue</h1>

    <p>
        Total products: {{ $products->count() }}
    </p>

    @foreach($products->chunk(3) as $products)

        <div class="row">
            @foreach ($products as $product)

                <div class="col-md-4">
                    <!-- Product application panel -->
                    <div class="panel panel-default">

                        <div class="panel-heading">
                            <a href="{{ route('product.show', $product->id) }}">{{ $product->name }}</a>
                        </div>

                        <div class="panel-body">

                            <img src="{{ $product->image }}" />

                            <p>{{ $product->description }}</p>

                            <p><strong>{{ $product->price }}</strong></p>

                        </div>

                    </div>
                </div>

            @endforeach
        </div>

    @endforeach


@endsection