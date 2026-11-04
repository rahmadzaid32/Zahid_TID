<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum Vitae</title>
    <link rel="stylesheet" href="{{ asset('assets.admin/css/volt.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-soft">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">

                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if (!$cv)
                    <!-- Tampilan Jika Data Masih Kosong -->
                    <div class="card border-0 shadow text-center py-5">
                        <div class="card-body">
                            <i class="fas fa-folder-open fa-4x text-muted mb-3"></i>
                            <h3 class="h4">Belum Ada Data CV</h3>
                            <p class="text-muted">Silakan isi data CV Anda terlebih dahulu ke dalam database.</p>
                            <a href="{{ route('cv.create') }}" class="btn btn-success text-white">
                                <i class="fas fa-plus me-1"></i> Tambah Data CV
                            </a>
                        </div>
                    </div>
                @else
                    <!-- Tampilan Utama Profil (Dinamis dari Database) -->
                    <div class="card border-0 shadow mb-4">
                        <div class="card-body p-4">
                            <div class="row align-items-center">
                                <div class="col-md-3 text-center mb-3 mb-md-0">
                                    <i class="fas fa-user-circle fa-7x text-primary"></i>
                                </div>
                                <div class="col-md-9">
                                    <h2 class="h1 fw-extrabold text-primary mb-1">{{ $cv->nama_lengkap }}</h2>
                                    <p class="text-muted fw-normal mb-2">{{ $cv->tentang_saya ?? 'Mahasiswa Teknik Informatika' }}</p>
                                    <p class="mb-0"><i class="fas fa-id-card me-2 text-secondary"></i>NIM: {{ $cv->nim }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Informasi Detail -->
                    <div class="row mb-4">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <div class="card border-0 shadow h-100">
                                <div class="card-body">
                                    <h4 class="h5 text-primary mb-3"><i class="fas fa-envelope me-2"></i>Kontak & Informasi</h4>
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><strong>Email:</strong> {{ $cv->email }}</li>
                                        <li class="mb-2"><strong>Prodi:</strong> {{ $cv->prodi }}</li>
                                        <li class="mb-2"><strong>No. HP:</strong> {{ $cv->no_hp ?? '-' }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card border-0 shadow h-100">
                                <div class="card-body">
                                    <h4 class="h5 text-primary mb-3"><i class="fas fa-code me-2"></i>Keahlian Utama</h4>
                                    <div>
                                        @if($cv->keahlian)
                                            @foreach(explode(',', $cv->keahlian) as $skill)
                                                <span class="badge bg-primary me-1 mb-2">{{ trim($skill) }}</span>
                                            @endforeach
                                        @else
                                            <span class="text-muted">Belum ada keahlian ditambahkan.</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tombol Aksi -->
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('dashboard') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left me-1"></i> Kembali ke Dashboard
                        </a>
                        <a href="{{ route('cv.edit', $cv->cv_id) }}" class="btn btn-info text-white">
                            <i class="fas fa-edit me-1"></i> Edit Data CV
                        </a>
                    </div>
                @endif

            </div>
        </div>
    </div>
</body>
</html>
