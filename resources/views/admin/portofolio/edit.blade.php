<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Portofolio</title>
    <link rel="stylesheet" href="{{ asset('assets.admin/css/volt.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-soft">
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 shadow">
                    <div class="card-header bg-info text-white">
                        <h3 class="h5 mb-0"><i class="fas fa-edit me-2"></i>Edit Data Portofolio</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('portofolio.update', $portofolio->portofolio_id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="judul_proyek" class="form-label">Judul Proyek</label>
                                <input type="text" id="judul_proyek" name="judul_proyek" class="form-control" value="{{ $portofolio->judul_proyek }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="kategori" class="form-label">Kategori</label>
                                <input type="text" id="kategori" name="kategori" class="form-control" value="{{ $portofolio->kategori }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi Proyek</label>
                                <textarea id="deskripsi" name="deskripsi" class="form-control" rows="4" required>{{ $portofolio->deskripsi }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="link_proyek" class="form-label">Link Proyek</label>
                                <input type="url" id="link_proyek" name="link_proyek" class="form-control" value="{{ $portofolio->link_proyek }}">
                            </div>

                            <div class="mt-4">
                                <button type="submit" class="btn btn-info text-white"><i class="fas fa-sync-alt me-1"></i> Update Data</button>
                                <a href="{{ route('portofolio.index') }}" class="btn btn-outline-secondary">Batal</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
