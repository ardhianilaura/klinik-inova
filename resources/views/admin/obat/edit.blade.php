@extends('layouts.app')

@section('konten')
    <h1>Edit Obat</h1>
    <form action="{{ route('admin.obat.update', $obat) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama_obat">Nama Obat</label>
            <input type="text" name="nama_obat" id="nama_obat" class="form-control" value="{{ $obat->nama_obat }}" required>
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="number" name="harga" id="harga" class="form-control" value="{{ $obat->harga }}" step="0.01" required>
        </div>
        <div class="form-group">
            <label for="stok">Stok</label>
            <input type="number" name="stok" id="stok" class="form-control" value="{{ $obat->stok }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <button type="button" class="btn btn-secondary" onclick="window.history.back()">Cancel</button>
    </form>
@endsection
