<!-- resources/views/dashboard/index.blade.php -->

@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="container">
        <h1>Dashboard</h1>
        <p>Selamat datang di Dashboard Web Mahasiswa. Di sini Anda dapat mengelola data mahasiswa, kelas, dosen, mata kuliah, dan jadwal.</p>
        <div class="row">
            <div class="col-md-4">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Mahasiswa</h5>
                        <p class="card-text">Kelola data mahasiswa.</p>
                        <a href="{{ route('mahasiswa.index') }}" class="btn btn-light">Lihat Mahasiswa</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-success mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Kelas</h5>
                        <p class="card-text">Kelola data kelas.</p>
                        <a href="{{ route('kelas.index') }}" class="btn btn-light">Lihat Kelas</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-info mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Dosen</h5>
                        <p class="card-text">Kelola data dosen.</p>
                        <a href="{{ route('dosen.index') }}" class="btn btn-light">Lihat Dosen</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-warning mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Mata Kuliah</h5>
                        <p class="card-text">Kelola data mata kuliah.</p>
                        <a href="{{ route('matakuliah.index') }}" class="btn btn-light">Lihat Mata Kuliah</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-danger mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Jadwal</h5>
                        <p class="card-text">Kelola jadwal kuliah.</p>
                        <a href="{{ route('jadwal.index') }}" class="btn btn-light">Lihat Jadwal</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
