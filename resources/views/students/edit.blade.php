<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-light">

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card shadow-sm border-0 rounded-4">
                    <div class="card-header bg-warning text-white p-3 rounded-top-4">
                        <h5 class="mb-0 fw-bold"><i class="fa-solid fa-user-pen me-2"></i>Edit Data Siswa</h5>
                    </div>

                    <div class="card-body p-4">
                        <form action="{{ route('students.update', $student->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Nama Siswa</label>
                                <input type="text" name="name" class="form-control" value="{{ $student->name }}" required>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-semibold">NISN / Kelas</label>
                                <input type="text" name="nisn" class="form-control" value="{{ $student->nisn }}" required>
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="{{ route('students.index') }}" class="btn btn-secondary">
                                    <i class="fa-solid fa-arrow-left me-1"></i> Kembali
                                </a>
                                <button type="submit" class="btn btn-warning text-white px-4">
                                    <i class="fa-solid fa-rotate me-1"></i> Update
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
