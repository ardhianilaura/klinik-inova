<?php

namespace App\Http\Controllers\Pegawai;

use App\Http\Controllers\Controller;
use App\Models\Pendaftaran;
use App\Models\Pasien;
use App\Models\User;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function index()
    {
        $pendaftaran = Pendaftaran::with('pasien', 'dokter')->get();
        return view('pegawai.pendaftaran.index', compact('pendaftaran'));
    }

    public function create()
    {
        $pasien = Pasien::all();
        $dokter = User::where('role', 'dokter')->get(); // Asumsikan dokter memiliki role 'dokter'
        return view('pegawai.pendaftaran.create', compact('pasien', 'dokter'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pasien_id' => 'required|exists:pasien,id',
            'dokter_id' => 'required|exists:users,id',
            'tanggal_pendaftaran' => 'required|date',
            'status' => 'required|in:terdaftar,selesai',
        ]);

        Pendaftaran::create($request->all());
        return redirect()->route('pegawai.pendaftaran.index')->with('success', 'Pendaftaran berhasil dibuat.');
    }
}
