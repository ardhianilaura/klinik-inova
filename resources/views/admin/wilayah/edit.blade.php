@extends('layouts.app')

@section('konten')
    <h1>Edit Wilayah</h1>
    <form action="{{ route('admin.wilayah.update', $wilayah) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama_wilayah">Nama Wilayah</label>
            <input type="text" name="nama_wilayah" id="nama_wilayah" class="form-control @error('nama_wilayah') is-invalid @enderror" value="{{ old('nama_wilayah', $wilayah->nama_wilayah) }}" required>
            @error('nama_wilayah')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <button href="{{ route('admin.wilayah.index') }}" class="btn btn-secondary">Cancel</button>
    </form>
@endsection
