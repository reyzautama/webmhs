@extends('layouts.app')

@section('title', 'Detail Mahasiswa')

@section('content')
    <div class="container">
        <h1>Detail Mahasiswa</h1>
        <div class="card mb-3">
            <div class="card-header">
                <h3>{{ $mahasiswa->nama }}</h3>
            </div>
            <div class="card-body">
                <p><strong>Kelas:</strong> {{ $mahasiswa->kelas }}</p>
            </div>
        </div>
        <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Kembali
        </a>
        <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}" class="btn btn-warning">
            <i class="fas fa-edit"></i> Edit
        </a>
        <form action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">
                <i class="fas fa-trash-alt"></i> Hapus
            </button>
        </form>
    </div>
@endsection
