@extends('layouts.app')

@section('konten')
    <div class="container">
        <h1>Tambah Pendaftaran</h1>
        <form action="{{ route('pegawai.pendaftaran.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="pasien_id">Pasien</label>
                <select name="pasien_id" id="pasien_id" class="form-control">
                    @foreach($pasien as $p)
                        <option value="{{ $p->id }}">{{ $p->nama_pasien }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="dokter_id">Dokter</label>
                <select name="dokter_id" id="dokter_id" class="form-control">
                    @foreach($dokter as $d)
                        <option value="{{ $d->id }}">{{ $d->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="tanggal_pendaftaran">Tanggal Pendaftaran</label>
                <input type="date" name="tanggal_pendaftaran" id="tanggal_pendaftaran" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="terdaftar">Terdaftar</option>
                    <option value="selesai">Selesai</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
