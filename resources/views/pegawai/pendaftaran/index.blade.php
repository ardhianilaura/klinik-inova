@extends('layouts.app')

@section('konten')
<div class="container">
    <h1>Daftar Pendaftaran</h1>
    <a href="{{ route('pegawai.pendaftaran.create') }}" class="btn btn-primary">Tambah Pendaftaran</a>
    <table class="table" style="margin-top: 20px;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Pasien</th>
                <th>Dokter</th>
                <th>Tanggal Pendaftaran</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pendaftaran as $pendaftaran)
            <tr>
                <td>{{ $pendaftaran->id }}</td>
                <td>{{ $pendaftaran->pasien->nama_pasien }}</td>
                <td>{{ $pendaftaran->dokter->name }}</td>
                <td>{{ $pendaftaran->tanggal_pendaftaran }}</td>
                <td>
                    @if($pendaftaran->status == 'terdaftar')
                    <span class="btn btn-primary">Terdaftar</span>
                    @elseif($pendaftaran->status == 'selesai')
                    <span class="btn btn-success">Selesai</span>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection