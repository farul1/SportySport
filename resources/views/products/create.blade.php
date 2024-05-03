@extends('layouts.app')

@section('content')
    <script>
        function validateForm() {
            let isValid = true;
            const kode = document.getElementById('kode').value.trim();
            const nama = document.getElementById('nama').value.trim();
            const harga = document.getElementById('harga').value.trim();
            const deskripsi = document.getElementById('deskripsi').value.trim();
            const satuan_id = document.getElementById('satuan_id').value.trim();
            const image_url = document.getElementById('image_url').value.trim();


            if (kode === '') {
                document.getElementById('kodeError').innerText = 'Kode harus diisi';
                isValid = false;
            } else {
                document.getElementById('kodeError').innerText = '';
            }

            if (nama === '') {
                document.getElementById('namaError').innerText = 'Nama harus diisi';
                isValid = false;
            } else {
                document.getElementById('namaError').innerText = '';
            }

            if (harga === '') {
                document.getElementById('hargaError').innerText = 'Harga harus diisi';
                isValid = false;
            } else {
                document.getElementById('hargaError').innerText = '';
            }

            if (deskripsi === '') {
                document.getElementById('deskripsiError').innerText = 'Deskripsi harus diisi';
                isValid = false;
            } else {
                document.getElementById('deskripsiError').innerText = '';
            }

            if (satuan_id === '') {
                document.getElementById('satuan_idError').innerText = 'Unit harus diisi';
                isValid = false;
            } else {
                document.getElementById('satuan_idError').innerText = '';
            }
            if (image_url === '') {
                document.getElementById('image_urlError').innerText = 'URL Gambar harus diisi';
                isValid = false;
            } else {
                document.getElementById('image_urlError').innerText = '';
            }

            return isValid;
        }
    </script>
    <div class="container-sm mt-5">
        <form action="{{ route('products.store') }}" method="POST" onsubmit="return validateForm()" enctype="multipart/form-data">
            @csrf
            <div class="row justify-content-center">
                <div class="p-5 custom-card rounded-3 border col-xl-6">
                    <div class="mb-3 text-center">
                        <i class="bi-person-circle fs-1"></i>
                        <h4>Create product</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="kode" class="form-label">Kode</label>
                            <input class="form-control @error('kode') is-invalid @enderror" type="text" name="kode" id="kode" value="{{ old('kode') }}" placeholder="Enter Kode">
                            <div id="kodeError" class="text-danger"></div>
                            @error('kode')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input class="form-control @error('nama') is-invalid @enderror" type="text" name="nama" id="nama" value="{{ old('nama') }}" placeholder="Enter Nama">
                            <div id="namaError" class="text-danger"></div>
                            @error('nama')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input class="form-control @error('harga') is-invalid @enderror" type="text" name="harga" id="harga" value="{{ old('harga') }}" placeholder="Enter Harga">
                            <div id="hargaError" class="text-danger"></div>
                            @error('harga')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <input class="form-control @error('deskripsi') is-invalid @enderror" type="text" name="deskripsi" id="deskripsi" value="{{ old('deskripsi') }}" placeholder="Enter Deskripsi">
                            <div id="deskripsiError" class="text-danger"></div>
                            @error('deskripsi')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="satuan_id" class="form-label">Unit</label>
                            <select class="form-select @error('satuan_id') is-invalid @enderror" name="satuan_id" id="satuan_id">
                                <option value="">Pilih Unit</option>
                                @foreach($units as $unit)
                                <option value="{{ $unit->id }}">{{ $unit->nama_satuan }}</option>
                                @endforeach
                            </select>
                            <div id="satuan_idError" class="text-danger"></div>
                            @error('satuan_id')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="image_url" class="form-label">URL Gambar</label>
                            <input class="form-control @error('image_url') is-invalid @enderror" type="text" name="image_url" id="image_url" value="{{ old('image_url') }}" placeholder="Masukkan URL Gambar">
                            <div id="image_urlError" class="text-danger"></div>
                            @error('image_url')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 d-grid">
                            <a href="{{ route('products.index') }}" class="btn btn-outline-dark btn-lg mt-3">
                                <i class="bi-arrow-left-circle me-2"></i> Cancel
                            </a>
                        </div>
                        <div class="col-md-6 d-grid">
                            <button type="submit" class="btn btn-dark btn-lg mt-3">
                                <i class="bi-check-circle me-2"></i> Save
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
