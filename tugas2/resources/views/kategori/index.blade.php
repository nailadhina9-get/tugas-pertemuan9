@extends('layouts.app')

@section('title', 'Daftar Kategori')

@section('content')

<h1 class="mb-4">Daftar Kategori Buku</h1>

<div class="row">

    @foreach($kategori_list as $kategori)

    <div class="col-md-4 mb-4">

        <div class="card h-100 shadow-sm">

            <div class="card-body">

                <h4>{{ $kategori['nama'] }}</h4>

                <p>
                    {{ $kategori['deskripsi'] }}
                </p>

                <p>
                    <strong>Jumlah Buku:</strong>
                    {{ $kategori['jumlah_buku'] }}
                </p>

                <a href="{{ route('kategori.show', $kategori['id']) }}"
                   class="btn btn-primary">
                    Detail
                </a>

            </div>
        </div>
    </div>

    @endforeach

</div>

@endsection