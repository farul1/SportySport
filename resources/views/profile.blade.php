@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0 shadow-lg">
                <div class="card-header text-white" style="background: linear-gradient(to right, #39b6ff, #b5deff); border-radius: 10px;">
                    <h4 class="card-title mb-0">Profil Saya</h4>
                </div>
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-md-4 text-center">
                            <div class="profile-picture">
                                <img src="{{ Vite::asset('resources/images/farul.jpg') }}" class="rounded-circle img-fluid" alt="Gambar Profil">
                                <div class="overlay"></div>
                            </div>
                            <h5 class="mt-3">Farul</h5>
                            <p class="text-muted">Mahasiswa Sistem Informasi 22'</p>
                        </div>
                        <div class="col-md-8">
                            <div class="card border-0 shadow">
                                <div class="card-body">
                                    <h5 class="card-title mb-4">Tentang Saya</h5>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item border-0"><i class="bi bi-person me-2 text-primary"></i> <span>Nama:</span> Syafarul Priwantoro</li>
                                        <li class="list-group-item border-0"><i class="bi bi-credit-card me-2 text-primary"></i> <span>NIM:</span> 1204220018</li>
                                        <li class="list-group-item border-0"><i class="bi bi-envelope me-2 text-primary"></i> <span>Email:</span> syafarulpriwantoro@gmail.com</li>
                                        <li class="list-group-item border-0"><i class="bi bi-geo-alt me-2 text-primary"></i> <span>Domisili:</span> Surabaya</li>
                                        <li class="list-group-item border-0"><i class="bi bi-building me-2 text-primary"></i> <span>Institut:</span> University Telkom Surabaya</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
