<?php

namespace App\Http\Controllers\Pegawai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Obat;
use App\Models\Tindakan;
use App\Models\Pasien;

class TransaksiController extends Controller
{
    public function index()
    {
        $obats = Obat::all();
        $tindakans = Tindakan::all();
        $pasiens = Pasien::all();

        return view('pegawai.transaksi.index', compact('obats', 'tindakans', 'pasiens'));
    }

    public function store(Request $request)
    {
        // Validasi dan simpan transaksi
        // Contoh validasi dan penyimpanan tidak disertakan di sini untuk kesederhanaan

        return redirect()->route('pegawai.transaksi.index')->with('success', 'Transaksi berhasil disimpan');
    }
}
