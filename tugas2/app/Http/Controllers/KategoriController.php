<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    // Data kategori
    private $kategori_list = [
        [
            'id' => 1,
            'nama' => 'Programming',
            'deskripsi' => 'Buku pemrograman dan coding',
            'jumlah_buku' => 25
        ],
        [
            'id' => 2,
            'nama' => 'Database',
            'deskripsi' => 'Buku database dan SQL',
            'jumlah_buku' => 18
        ],
        [
            'id' => 3,
            'nama' => 'Networking',
            'deskripsi' => 'Buku jaringan komputer',
            'jumlah_buku' => 12
        ],
        [
            'id' => 4,
            'nama' => 'Design',
            'deskripsi' => 'Buku desain grafis dan UI/UX',
            'jumlah_buku' => 15
        ],
        [
            'id' => 5,
            'nama' => 'Cyber Security',
            'deskripsi' => 'Buku keamanan sistem',
            'jumlah_buku' => 10
        ]
    ];

    public function index()
    {
        $kategori_list = $this->kategori_list;

        return view('kategori.index', compact('kategori_list'));
    }

    public function show($id)
    {
        $kategori = collect($this->kategori_list)
                    ->firstWhere('id', $id);

        if (!$kategori) {
            abort(404);
        }

        // Data buku
        $buku_list = [
            [
                'judul' => 'Laravel 12',
                'pengarang' => 'Taylor Otwell',
                'tahun' => 2025
            ],
            [
                'judul' => 'PHP Dasar',
                'pengarang' => 'John Doe',
                'tahun' => 2024
            ],
            [
                'judul' => 'Mastering Bootstrap',
                'pengarang' => 'Jane Smith',
                'tahun' => 2023
            ]
        ];

        return view('kategori.show', compact('kategori', 'buku_list'));
    }

    public function search($keyword)
    {
        $hasil = collect($this->kategori_list)->filter(function ($kategori) use ($keyword) {

            return str_contains(
                strtolower($kategori['nama']),
                strtolower($keyword)
            );

        });

        return view('kategori.search', compact('hasil', 'keyword'));
    }
}