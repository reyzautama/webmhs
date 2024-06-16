<!-- resources/views/kelas/index.blade.php -->

@extends('layouts.app')

@section('title', 'Daftar Kelas')

@section('content')
<div class="container">
    <h1>Daftar Kelas</h1>
    <a href="{{ route('kelas.create') }}" class="btn btn-primary mb-3">
        <i class="fas fa-plus"></i> Tambah Kelas
    </a>
    @if ($kelas->isEmpty())
        <div class="alert alert-info">
            Belum ada kelas yang tersedia saat ini.
        </div>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama Kelas</th>
                    <th>Kode Kelas</th>
                    <th>Dosen Pengampu</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kelas as $kelasItem)
                <tr>
                    <td>{{ $kelasItem->nama }}</td>
                    <td>{{ $kelasItem->kode }}</td>
                    <td>{{ $kelasItem->dosen_pengampu }}</td>
                    <td>
                        <a href="{{ route('kelas.show', $kelasItem->id) }}" class="btn btn-info btn-sm">
                            <i class="fas fa-eye"></i> Detail
                        </a>
                        <a href="{{ route('kelas.edit', $kelasItem->id) }}" class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <form action="{{ route('kelas.destroy', $kelasItem->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">
                                <i class="fas fa-trash-alt"></i> Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
