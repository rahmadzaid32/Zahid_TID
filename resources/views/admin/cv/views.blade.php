<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum Vitae - Zahid Rahmad Ramadhan</title>
    <!-- Volt Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets.admin/css/volt.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-soft">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">

                <!-- Alert Sukses -->
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if (!$cv)
                    <!-- TAMPILAN JIKA DATA DATABASE MASIH KOSONG -->
                    <div class="card border-0 shadow mb-4">
                        <div class="card-body p-4 text-center text-md-start">
                            <div class="row align-items-center">
                                <div class="col-md-3 text-center mb-3 mb-md-0">
                                    <i class="fas fa-user-circle fa-7x text-primary"></i>
                                </div>
                                <div class="col-md-9">
                                    <h2 class="h1 fw-extrabold text-primary mb-1">Zahid Rahmad Ramadhan</h2>
                                    <p class="text-muted fw-normal mb-2">Mahasiswa Teknik Informatika - Politeknik Caltex Riau</p>
                                    <p class="mb-0"><i class="fas fa-id-card me-2 text-secondary"></i>NIM: 2455301202</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <div class="card border-0 shadow h-100">
                                <div class="card-body">
                                    <h4 class="h5 text-primary mb-3"><i class="fas fa-envelope me-2"></i>Kontak & Informasi</h4>
                                    <ul class="list-unstyled">
                                        <li class="mb-2"><strong>Email:</strong> zahid24ti@mahasiswa.pcr.ac.id</li>
                                        <li class="mb-2"><strong>Prodi:</strong> 1-TID Teknik Informatika</li>
                                        <li class="mb-2"><strong>Institusi:</strong> Politeknik Caltex Riau</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card border-0 shadow h-100">
                                <div class="card-body">
                                    <h4 class="h5 text-primary mb-3"><i class="fas fa-code me-2"></i>Keahlian Utama</h4>
                                    <div>
                                        <span class="badge bg-primary me-1 mb-2">PHP / Laravel</span>
                                        <span class="badge bg-secondary me-1 mb-2">HTML & CSS</span>
                                        <span class="badge bg-info me-1 mb-2">MySQL / Database</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tombol Tambah Data & Navigasi -->
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="{{ route('dashboard') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left me-1"></i> Kembali ke Dashboard
                        </a>
                        <a href="{{ route('cv.create') }}" class="btn btn-success text-white">
                            <i class="fas
