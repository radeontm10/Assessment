<!-- resources/views/matakuliah/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Daftar Matakuliah</h1>
    <a href="{{ route('matakuliah.create') }}" class="btn btn-primary">Tambah Matakuliah</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Nama Matakuliah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($matakuliahs as $matakuliah)
                <tr>
                    <td>{{ $matakuliah->matakuliah }}</td>
                    <td>
                        <a href="{{ route('matakuliah.edit', $matakuliah->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('matakuliah.destroy', $matakuliah->id) }}" method="POST" style="display: inline">
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
