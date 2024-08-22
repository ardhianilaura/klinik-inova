@extends('layouts.app')

@section('konten')
    <h1 class="text-2xl font-bold mb-4">Add Tindakan</h1>
    <form action="{{ route('admin.tindakan.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama_tindakan">Name</label>
            <input type="text" name="nama_tindakan" id="nama_tindakan" class="form-control @error('nama_tindakan') is-invalid @enderror" value="{{ old('nama_tindakan') }}" required>
            @error('nama_tindakan')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="biaya">Biaya</label>
            <input type="number" name="biaya" id="biaya" class="form-control @error('biaya') is-invalid @enderror" value="{{ old('biaya') }}" step="0.01" required>
            @error('biaya')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-secondary" onclick="window.history.back()">Cancel</button>
    </form>
@endsection
