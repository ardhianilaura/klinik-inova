@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Transaksi Tindakan dan Obat</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('pegawai.transaksi.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="pasien" class="form-label">Pilih Pasien</label>
            <select id="pasien" name="pasien_id" class="form-select">
                @foreach($pasiens as $pasien)
                    <option value="{{ $pasien->id }}">{{ $pasien->nama_pasien }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="tindakan" class="form-label">Pilih Tindakan</label>
            <select id="tindakan" name="tindakan_id" class="form-select">
                @foreach($tindakans as $tindakan)
                    <option value="{{ $tindakan->id }}">{{ $tindakan->nama_tindakan }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="obat" class="form-label">Pilih Obat</label>
            <select id="obat" name="obat_id" class="form-select">
                @foreach($obats as $obat)
                    <option value="{{ $obat->id }}">{{ $obat->nama_obat }} - {{ $obat->harga }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Transaksi</button>
    </form>
</div>
@endsection
