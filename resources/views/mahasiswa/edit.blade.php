@extends('layouts.app')

@section('title', 'Edit Mahasiswa')

@section('content')
    <div class="container">
        <h1>Edit Mahasiswa</h1>
        <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $mahasiswa->nama }}" required>
            </div>
            <div class="form-group">
                <label for="kelas">Kelas:</label>
                <input type="text" class="form-control" id="kelas" name="kelas" value="{{ $mahasiswa->kelas }}" required>
            </div>
            <button type="submit" class="btn btn-success">
                <i class="fas fa-save"></i> Simpan
            </button>
            <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
        </form>
    </div>
@endsection
