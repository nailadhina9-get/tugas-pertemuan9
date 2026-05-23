<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;

Route::get('/anggota', function () {

    $anggota_list = [
        [
            'id' => 1,
            'kode' => 'AGT-001',
            'nama' => 'Budi Santoso',
            'email' => 'budi@email.com',
            'telepon' => '081234567890',
            'alamat' => 'Jakarta',
            'status' => 'Aktif'
        ],
        [
            'id' => 2,
            'kode' => 'AGT-002',
            'nama' => 'Siti Aminah',
            'email' => 'siti@email.com',
            'telepon' => '081234567891',
            'alamat' => 'Bandung',
            'status' => 'Aktif'
        ],
        [
            'id' => 3,
            'kode' => 'AGT-003',
            'nama' => 'Andi Saputra',
            'email' => 'andi@email.com',
            'telepon' => '081234567892',
            'alamat' => 'Surabaya',
            'status' => 'Nonaktif'
        ],
        [
            'id' => 4,
            'kode' => 'AGT-004',
            'nama' => 'Dewi Lestari',
            'email' => 'dewi@email.com',
            'telepon' => '081234567893',
            'alamat' => 'Yogyakarta',
            'status' => 'Aktif'
        ],
        [
            'id' => 5,
            'kode' => 'AGT-005',
            'nama' => 'Rudi Hartono',
            'email' => 'rudi@email.com',
            'telepon' => '081234567894',
            'alamat' => 'Semarang',
            'status' => 'Nonaktif'
        ],
    ];

    return view('anggota.index', compact('anggota_list'));
})->name('anggota.index');


Route::get('/anggota/{id}', function ($id) {

    $anggota_list = [
        [
            'id' => 1,
            'kode' => 'AGT-001',
            'nama' => 'Budi Santoso',
            'email' => 'budi@email.com',
            'telepon' => '081234567890',
            'alamat' => 'Jakarta',
            'status' => 'Aktif'
        ],
        [
            'id' => 2,
            'kode' => 'AGT-002',
            'nama' => 'Siti Aminah',
            'email' => 'siti@email.com',
            'telepon' => '081234567891',
            'alamat' => 'Bandung',
            'status' => 'Aktif'
        ],
        [
            'id' => 3,
            'kode' => 'AGT-003',
            'nama' => 'Andi Saputra',
            'email' => 'andi@email.com',
            'telepon' => '081234567892',
            'alamat' => 'Surabaya',
            'status' => 'Nonaktif'
        ],
        [
            'id' => 4,
            'kode' => 'AGT-004',
            'nama' => 'Dewi Lestari',
            'email' => 'dewi@email.com',
            'telepon' => '081234567893',
            'alamat' => 'Yogyakarta',
            'status' => 'Aktif'
        ],
        [
            'id' => 5,
            'kode' => 'AGT-005',
            'nama' => 'Rudi Hartono',
            'email' => 'rudi@email.com',
            'telepon' => '081234567894',
            'alamat' => 'Semarang',
            'status' => 'Nonaktif'
        ],
    ];

    $anggota = collect($anggota_list)->firstWhere('id', $id);

    return view('anggota.show', compact('anggota'));
})->name('anggota.show');



Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');

Route::get('/kategori/{id}', [KategoriController::class, 'show'])->name('kategori.show');

Route::get('/kategori/search/{keyword}', [KategoriController::class, 'search'])->name('kategori.search');
Route::get('/kategori', [KategoriController::class, 'index'])
    ->name('kategori.index');

Route::get('/kategori/{id}', [KategoriController::class, 'show'])
    ->name('kategori.show');

Route::get('/kategori/search/{keyword}', [KategoriController::class, 'search'])
    ->name('kategori.search');