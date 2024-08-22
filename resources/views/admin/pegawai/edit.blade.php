<!-- resources/views/admin/pegawai/edit.blade.php -->

@extends('layouts.app')

@section('konten')
    <h1 class="text-2xl font-bold mb-4">Edit Pegawai</h1>
    <form action="{{ route('admin.pegawai.update', $pegawai) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama_pegawai">Name</label>
            <input type="text" name="nama_pegawai" id="nama_pegawai" class="form-control @error('nama_pegawai') is-invalid @enderror" value="{{ $pegawai->nama_pegawai }}" required>
            @error('nama_pegawai')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="wilayah_id">Wilayah</label>
            <select name="wilayah_id" id="wilayah_id" class="form-control @error('wilayah_id') is-invalid @enderror" required>
                @foreach($wilayahs as $wilayah)
                    <option value="{{ $wilayah->id }}" {{ $pegawai->wilayah_id == $wilayah->id ? 'selected' : '' }}>
                        {{ $wilayah->nama_wilayah }}
                    </option>
                @endforeach
            </select>
            @error('wilayah_id')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <button type="button" class="btn btn-secondary" onclick="window.history.back()">Cancel</button>
    </form>
@endsection
