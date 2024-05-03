@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br>
                <h2 class="text-center mb-4">Sporty Sport</h2>
                <div class="row">
                    @foreach($products as $product)
                        <div class="col-md-4 mb-4">
                            <div class="card h-100 border-0 shadow">
                                <img src="{{ $product['image_url'] }}" class="card-img-top rounded mx-auto d-block" alt="{{ $product['name'] }}" style="width: 70%; height: 200px; object-fit: cover;">
                                <div class="card-body text-center">
                                    <h5 class="card-title">{{ $product['name'] }}</h5>
                                    <p class="card-text">{{ $product['description'] }}</p>
                                    <a href="{{ route('products.show', $product->id) }}" class="btn1 btn-primary">Detail</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
