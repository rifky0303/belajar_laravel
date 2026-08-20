<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-light">

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-10">

                <div class="card shadow-sm border-0 rounded-4">
                    <div class="card-header bg-primary text-white p-3 d-flex justify-content-between align-items-center rounded-top-4">
                        <h4 class="mb-0 fw-bold"><i class="fa-solid fa-graduation-cap me-2"></i>Data Siswa</h4>
                        <a href="{{ route('students.create') }}" class="btn btn-light btn-sm fw-bold shadow-sm">
                            <i class="fa-solid fa-plus me-1"></i> Tambah Siswa Baru
                        </a>
                    </div>

                    <div class="card-body p-4">

                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm mb-4" role="alert">
                                <i class="fa-solid fa-circle-check me-2"></i>{{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <div class="table-responsive">
                            <table class="table table-hover align-middle">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col" width="80">No</th>
                                        <th scope="col">Nama Siswa</th>
                                        <th scope="col">NISN / Kelas</th>
                                        <th scope="col" width="200" class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($students as $index => $student)
                                    <tr>
                                        <td class="fw-bold text-secondary">{{ $index + 1 }}</td>
                                        <td class="fw-semibold text-dark">{{ $student->name }}</td>
                                        <td><span class="badge bg-info text-dark px-3 py-2 rounded-pill">{{ $student->nisn }}</span></td>
                                        <td class="text-center">
                                            <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning btn-sm text-white me-1">
                                                <i class="fa-solid fa-pen-to-square"></i> Edit
                                            </a>
                                            <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">
                                                    <i class="fa-solid fa-trash"></i> Hapus
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="4" class="text-center py-4 text-muted">
                                            <i class="fa-solid fa-folder-open fa-2x mb-2 d-block"></i>
                                            Belum ada data siswa.
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
