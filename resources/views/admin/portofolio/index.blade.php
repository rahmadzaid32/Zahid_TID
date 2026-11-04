<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Portofolio 1202</title>
    <link rel="stylesheet" href="{{ asset('assets.admin/css/volt.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-soft">
    <div class="container py-4">
        <!-- Header & Tombol Tambah -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h2 class="h4 mb-0">Data Portofolio</h2>
                <p class="text-muted mb-0">List data portofolio (Tabel: portofolio_1202)</p>
            </div>
            <a href="{{ route('portofolio.create') }}" class="btn btn-success text-white">
                <i class="fas fa-plus me-1"></i> Tambah Portofolio
            </a>
        </div>

        <!-- Alert Sukses -->
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- Tabel Data -->
        <div class="card border-0 shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-centered table-nowrap mb-0 rounded">
                        <thead class="thead-light">
                            <tr>
                                <th class="border-0 rounded-start">#</th>
                                <th class="border-0">Judul Proyek</th>
                                <th class="border-0">Kategori</th>
                                <th class="border-0">Deskripsi</th>
                                <th class="border-0">Link Proyek</th>
                                <th class="border-0 rounded-end text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($dataPortofolio as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><strong>{{ $item->judul_proyek }}</strong></td>
                                    <td><span class="badge bg-primary">{{ $item->kategori }}</span></td>
                                    <td>{{ Str::limit($item->deskripsi, 40) }}</td>
                                    <td>
                                        @if($item->link_proyek)
                                            <a href="{{ $item->link_proyek }}" target="_blank" class="text-info">
                                                <i class="fas fa-external-link-alt me-1"></i> Buka Link
                                            </a>
                                        @else
                                            <span class="text-muted">-</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('portofolio.edit', $item->portofolio_id) }}" class="btn btn-sm btn-info text-white me-1">
                                            <i class="fas fa-edit me-1"></i> Edit
                                        </a>
                                        <form action="{{ route('portofolio.destroy', $item->portofolio_id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">
                                                <i class="fas fa-trash me-1"></i> Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center py-4 text-muted">Belum ada data portofolio.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <a href="{{ route('dashboard') }}" class="btn btn-secondary"><i class="fas fa-arrow-left me-1"></i> Kembali ke Dashboard</a>
    </div>
</body>
</html>
