<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestoranController;

Route::get('/', function () {
    return view('welcome');
});

//ambil data baru
Route::post('/restoran', [RestoranController::class, 'index'])->name('index');
//tambah data baru
Route::post('/restoran/tambah-data',[RestoranController::class, 'store'])->name('store');
//generet token csrf
Route::get('/generate-token',[RestoranController::class,'createToken'])->name('createToken');
//menampilkan data yang sudah di hapus sementara oleh sofdeletes
Route::get('/restoran/show/trash', [RestoranController::class, 'trash'])->name('trash');
//menghapus data permanent
Route::get('/restoran/trash/delete/permanent', [RestoranController::class, 'permanentDelete'])->name('permanentDelete');
//ambil satu data spesifik
Route::get('/restoran/{id}', [RestoranController::class, 'show'])->name('show');
//mengubah data tertentu
Route::patch('/restoran/update/{id}', [RestoranController::class, 'update'])->name('update');
//menghapus data tertentu
Route::delete('/restoran/delete/{id}', [RestoranController::class, 'destroy'])->name('destroy');
Route::get('/restoran/show/trash/{id}', [RestoranController::class, 'restore'])->name('restore');