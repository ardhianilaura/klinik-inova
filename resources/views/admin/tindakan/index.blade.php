@extends('layouts.app')

@section('konten')
<h1 class="mb-4">List Tindakan</h1>
<a href="{{ route('admin.tindakan.create') }}" class="btn btn-primary mb-3">Tambahkan Tindakan</a>

@if(session('success'))
<div style="margin-top: 20px;" class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<div class="table-responsive" style="margin-top: 20px;">
    <table class="table table-bordered">
        <thead>
            <tr class="table-light">
                <th class="text-center">Nama Tindakan</th>
                <th class="text-center">Biaya</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tindakans as $tindakan)
            <tr>
                <td>{{ $tindakan->nama_tindakan }}</td>
                <td>{{ number_format($tindakan->biaya, 2) }}</td>
                <td class="text-center">
                    <a href="{{ route('admin.tindakan.edit', $tindakan) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('admin.tindakan.destroy', $tindakan) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection