<!-- resources/views/mahasiswa/index.blade.php -->

@extends('layouts.app')

@section('title', 'Data Mahasiswa')

@section('content')
    <div class="container">
        <h1>Data Mahasiswa</h1>
        <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary mb-3">
            <i class="fas fa-plus"></i> Tambah Mahasiswa
        </a>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswas as $mahasiswa)
                    <tr>
                        <td>{{ $mahasiswa->nama }}</td>
                        <td>{{ $mahasiswa->kelas }}</td>
                        <td>
                            <a href="{{ route('mahasiswa.show', $mahasiswa->id) }}" class="btn btn-info btn-sm">
                                <i class="fas fa-eye"></i> Show
                            </a>
                            <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}" class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash-alt"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
