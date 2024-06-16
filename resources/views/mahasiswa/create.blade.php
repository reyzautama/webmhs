@extends('layouts.app')

@section('title', 'Tambah Mahasiswa')

@section('content')
    <div class="container">
        <h1 class="mb-4">Tambah Mahasiswa</h1>
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Formulir Tambah Mahasiswa</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('mahasiswa.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama:</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas:</label>
                        <input type="text" class="form-control" id="kelas" name="kelas" required>
                    </div>
                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-save"></i> Simpan
                    </button>
                    <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                </form>
            </div>
        </div>
    </div>
@endsection
