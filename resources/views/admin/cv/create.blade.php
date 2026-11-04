<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data CV</title>
    <link rel="stylesheet" href="{{ asset('assets.admin/css/volt.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-soft">
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 shadow">
                    <div class="card-header bg-primary text-white">
                        <h3 class="h5 mb-0"><i class="fas fa-user-plus me-2"></i>Tambah Data CV</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('cv.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                    <input type="text" id="nama_lengkap" name="nama_lengkap" class="form-control" required placeholder="Zahid Rahmad Ramadhan">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="nim" class="form-label">NIM</label>
                                    <input type="text" id="nim" name="nim" class="form-control" required placeholder="2455301202">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="prodi" class="form-label">Program Studi / Kelas</label>
                                    <input type="text" id="prodi" name="prodi" class="form-control" required placeholder="1-TID Teknik Informatika">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" id="email" name="email" class="form-control" required placeholder="zahid24ti@mahasiswa.pcr.ac.id">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="no_hp" class="form-label">No. Telepon / HP</label>
                                <input type="text" id="no_hp" name="no_hp" class="form-control" placeholder="08221314534">
                            </div>

                            <div class="mb-3">
                                <label for="keahlian" class="form-label">Keahlian (pisahkan dengan koma)</label>
                                <input type="text" id="keahlian" name="keahlian" class="form-control" placeholder="PHP / Laravel, HTML & CSS, MySQL / Database">
                            </div>

                            <div class="mb-3">
                                <label for="tentang_saya" class="form-label">Tentang Saya / Deskripsi Ringkas</label>
                                <textarea id="tentang_saya" name="tentang_saya" class="form-control" rows="3" placeholder="Mahasiswa Teknik Informatika Politeknik Caltex Riau..."></textarea>
                            </div>

                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary"><i class="fas fa-save me-1"></i> Simpan CV</button>
                                <a href="{{ route('cv.index') }}" class="btn btn-outline-secondary">Batal</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
