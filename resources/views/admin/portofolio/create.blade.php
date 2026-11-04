<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Portofolio</title>
    <link rel="stylesheet" href="{{ asset('assets.admin/css/volt.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-soft">
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 shadow">
                    <div class="card-header bg-primary text-white">
                        <h3 class="h5 mb-0"><i class="fas fa-plus-circle me-2"></i>Tambah Data Portofolio</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('portofolio.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="judul_proyek" class="form-label">Judul Proyek</label>
                                <input type="text" id="judul_proyek" name="judul_proyek" class="form-control" required placeholder="Masukkan judul proyek">
                            </div>

                            <div class="mb-3">
                                <label for="kategori" class="form-label">Kategori</label>
                                <input type="text" id="kategori" name="kategori" class="form-control" required placeholder="Contoh: Web Development, Mobile App, UI/UX">
                            </div>

                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi Proyek</label>
                                <textarea id="deskripsi" name="deskripsi" class="form-control" rows="4" required placeholder="Jelaskan rincian proyek"></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="link_proyek" class="form-label">Link Proyek (Opsional)</label>
                                <input type="url" id="link_proyek" name="link_proyek" class="form-control" placeholder="https://github.com/username/project">
                            </div>

                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary"><i class="fas fa-save me-1"></i> Simpan Data</button>
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
