@extends('layouts.app')

@section('konten')
<h1>Add Wilayah</h1>
<form action="{{ route('admin.wilayah.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nama_wilayah">Nama Wilayah</label>
        <input type="text" name="nama_wilayah" id="nama_wilayah" class="form-control @error('nama_wilayah') is-invalid @enderror" value="{{ old('nama_wilayah') }}" required>
        @error('nama_wilayah')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
    <button type="button" class="btn btn-secondary" onclick="window.history.back()">Cancel</button>
</form>
@endsection