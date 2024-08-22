<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pegawai;
use App\Models\Wilayah;
use Illuminate\Http\Request;

class AllPegawaiController extends Controller
{
    public function index()
    {
        $pegawai = Pegawai::with('wilayah')->get();
        return view('admin.pegawai.index', compact('pegawai'));
    }

    public function create()
    {
        $wilayahs = Wilayah::all();
        return view('admin.pegawai.create', compact('wilayahs'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_pegawai' => 'required|string|max:255',
            'wilayah_id' => 'required|exists:wilayah,id',
        ]);

        Pegawai::create($validated);

        return redirect()->route('admin.pegawai.index')->with('success', 'Pegawai created successfully.');
    }

    public function edit(Pegawai $pegawai)
    {
        $wilayahs = Wilayah::all();
        return view('admin.pegawai.edit', compact('pegawai', 'wilayahs'));
    }

    public function update(Request $request, Pegawai $pegawai)
    {
        $validated = $request->validate([
            'nama_pegawai' => 'required|string|max:255',
            'wilayah_id' => 'required|exists:wilayah,id',
        ]);

        $pegawai->update($validated);

        return redirect()->route('admin.pegawai.index')->with('success', 'Pegawai updated successfully.');
    }

    public function destroy(Pegawai $pegawai)
    {
        $pegawai->delete();
        return redirect()->route('admin.pegawai.index')->with('success', 'Pegawai deleted successfully.');
    }
}
