<!-- resources/views/mahasiswa/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Daftar Mahasiswa</h1>
    <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary">Tambah Mahasiswa</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Program Studi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswas as $mahasiswa)
                <tr>
                    <td>{{ $mahasiswa->nim }}</td>
                    <td>{{ $mahasiswa->nama }}</td>
                    <td>{{ $mahasiswa->prodii }}</td>
                    <td>
                        <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin untuk menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
