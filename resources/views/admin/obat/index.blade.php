@extends('layouts.app')

@section('konten')
<h1>List Obat</h1>
<a href="{{ route('admin.obat.create') }}" class="btn btn-primary">Tambahkan Obat</a>

@if(session('success'))
<div class="alert alert-success" style="margin-top: 20px;">{{ session('success') }}</div>
@endif

<div class="table-responsive" style="margin-top: 20px;">
    <table class="table table-bordered">
        <thead>
            <tr class="table-light">
                <th class="text-center">Nama Obat</th>
                <th class="text-center">Harga</th>
                <th class="text-center">Stok</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($obat as $item)
            <tr>
                <td>{{ $item->nama_obat }}</td>
                <td>{{ $item->harga }}</td>
                <td class="text-center">{{ $item->stok }}</td>
                <td class="text-center">
                    <a href="{{ route('admin.obat.edit', $item) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('admin.obat.destroy', $item) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection