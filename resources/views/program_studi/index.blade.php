<!-- resources/views/program_studi/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Daftar Program Studi</h1>
    <a href="{{ route('program_studi.create') }}" class="btn btn-primary">Tambah Program Studi</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Nama Program Studi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($programStudis as $programStudi)
                <tr>
                    <td>{{ $programStudi->nama_program_studi }}</td>
                    <td>
                        <a href="{{ route('program_studi.edit', $programStudi->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('program_studi.destroy', $programStudi->id) }}" method="POST" style="display: inline">
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
