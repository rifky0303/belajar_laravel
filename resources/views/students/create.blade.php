<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-light">

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card shadow-sm border-0 rounded-4">
                    <div class="card-header bg-primary text-white p-3 rounded-top-4">
                        <h5 class="mb-0 fw-bold"><i class="fa-solid fa-user-plus me-2"></i>Tambah Data Siswa</h5>
                    </div>

                    <div class="card-body p-4">
                        <form action="{{ route('students.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Nama Siswa</label>
                                <input type="text" name="name" class="form-control" placeholder="Masukkan nama lengkap..." required>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-semibold">NISN / Kelas</label>
                                <input type="text" name="nisn" class="form-control" placeholder="Masukkan NISN atau Kelas..." required>
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="{{ route('students.index') }}" class="btn btn-secondary">
                                    <i class="fa-solid fa-arrow-left me-1"></i> Kembali
                                </a>
                                <button type="submit" class="btn btn-primary px-4">
                                    <i class="fa-solid fa-floppy-disk me-1"></i> Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>
</html>
