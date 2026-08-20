<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

// Ubah halaman utama '/' agar langsung menampilkan controller siswa
Route::get('/', [StudentController::class, 'index']);

// Route resource untuk fitur Tambah, Edit, Update, dan Hapus
Route::resource('students', StudentController::class);
