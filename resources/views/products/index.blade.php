@extends('layouts.app')

@section('content')
<div class="container">
    <br>
    <div class="d-flex justify-content-end">
        <a href="{{ route('products.create') }}" class="btn btn-outline-dark mb-3">Tambah Produk</a>
    </div>
    <br>
    <h2 class="text-center text-br"><strong>Daftar Produk</strong></h2>

    <br>
    <br>
    <div class="table-container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Deskripsi</th>
                    <th>Satuan</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->kode }}</td>
                        <td>{{ $product->nama }}</td>
                        <td>Rp {{ number_format($product->harga, 0, ',', '.') }}</td>
                        <td>{{ $product->deskripsi }}</td>
                        <td>
                            @if ($product->satuan)
                                {{ $product->satuan->nama_satuan }}
                            @else
                                Satuan tidak tersedia
                            @endif
                        </td>
                        <td>
                            @if($product->image_url)
                                <img src="{{ $product->image_url }}" alt="Gambar Produk" style="max-width: 100px; max-height: 100px;">
                            @else
                                Gambar tidak tersedia
                            @endif
                        </td>
                        <td>
                            @include('products.actions')
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
