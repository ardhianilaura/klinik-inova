@extends('layouts.app')

@section('konten')
<h1>List Wilayah</h1>
<a href="{{ route('admin.wilayah.create') }}" class="btn btn-primary">Tambahkan Wilayah</a>

@if(session('success'))
<div style="margin-top: 20px;" class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<div class="table-responsive" style="margin-top: 20px;">
    <table class="table table-bordered">
        <thead>
            <tr class="table-light">
                <th class="text-center">ID</th>
                <th class="text-center">Nama Wilayah</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($wilayah as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nama_wilayah }}</td>
                <td class="text-center">
                    <a href="{{ route('admin.wilayah.edit', $item) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('admin.wilayah.destroy', $item) }}" method="POST" style="display:inline;">
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