@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="p-5 bg-light rounded-3 border">
                    <div class="mb-4 text-center">
                        <i class="bi-person-circle fs-1"></i>
                        <h4>Edit Product</h4>
                    </div>
                    <hr class="my-4">
                    <form action="{{ route('products.update', ['product' => $product->id]) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="kode" class="form-label">Kode</label>
                            <input class="form-control @error('kode') is-invalid @enderror" type="text" name="kode" id="kode" value="{{ $errors->any() ? old('kode') : $product->kode }}" placeholder="Enter Kode">
                            @error('kode')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Gambar Saat Ini</label>
                            <img src="{{ $product->image_url }}" class="img-fluid mb-2" alt="Gambar Saat Ini">
                        </div>

                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input class="form-control @error('nama') is-invalid @enderror" type="text" name="nama" id="nama" value="{{ $errors->any() ? old('nama') : $product->nama }}" placeholder="Enter Nama">
                            @error('nama')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input class="form-control @error('harga') is-invalid @enderror" type="text" name="harga" id="harga" value="{{ $errors->any() ? old('harga') : $product->harga }}" placeholder="Enter Harga">
                            @error('harga')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <input class="form-control @error('deskripsi') is-invalid @enderror" type="text" name="deskripsi" id="deskripsi" value="{{ $errors->any() ? old('deskripsi') : $product->deskripsi }}" placeholder="Enter Deskripsi">
                            @error('deskripsi')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="satuan_id" class="form-label">Unit</label>
                            <select class="form-select @error('satuan_id') is-invalid @enderror" name="satuan_id" id="satuan_id">
                                <option value="">Pilih Satuan</option>
                                @foreach($units as $unit)
                                    <option value="{{ $unit->id }}" {{ $unit->id == $product->satuan_id ? 'selected' : '' }}>{{ $unit->nama_satuan }}</option>
                                @endforeach
                            </select>
                            @error('satuan_id')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-outline-dark btn-lg btn-block">
                                    <i class="bi-arrow-left-circle me-2"></i> Cancel
                                </button>
                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-dark btn-lg btn-block">
                                    <i class="bi-check-circle me-2"></i> Edit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
