@extends('layouts.app')

@section('content')
    <div class="container">
        <br>
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">{{ $product->nama }}</h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>Kode:</strong> {{ $product->kode }}</p>
                        <p><strong>Harga:</strong> {{ $product->harga }}</p>
                        <p><strong>Satuan:</strong> {{ $product->satuan->nama }}</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Deskripsi:</strong></p>
                        <p>{{ $product->deskripsi }}</p>
                    </div>
                </div>
            </div>
            <div class="card-footer text-muted">
                <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
            </div>
        </div>
    </div>
@endsection
