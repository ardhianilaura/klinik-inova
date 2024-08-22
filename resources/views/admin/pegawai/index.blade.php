@extends('layouts.app')

@section('konten')
<h1>List Pegawai</h1>
<a href="{{ route('admin.pegawai.create') }}" class="btn btn-primary">Tambahkan Pegawai</a>

@if(session('success'))
<div class="alert alert-success" style="margin-top: 20px;">{{ session('success') }}</div>
@endif

<table class="table table-bordered" style="margin-top: 20px;">
    <thead>
        <tr>
            <th class="text-center">Nama</th>
            <th class="text-center">Wilayah</th>
            <th class="text-center">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pegawai as $p)
        <tr>
            <td>{{ $p->nama_pegawai }}</td>
            <td>{{ $p->wilayah->nama_wilayah }}</td>
            <td class="text-center">
                <a href="{{ route('admin.pegawai.edit', $p) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('admin.pegawai.destroy', $p) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection