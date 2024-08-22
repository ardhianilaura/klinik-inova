<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    public function index()
    {
        $obat = Obat::all();
        return view('admin.obat.index', compact('obat'));
    }

    public function create()
    {
        return view('admin.obat.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_obat' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
        ]);

        Obat::create($request->all());

        return redirect()->route('admin.obat.index')->with('success', 'Obat created successfully.');
    }

    public function edit(Obat $obat)
    {
        return view('admin.obat.edit', compact('obat'));
    }

    public function update(Request $request, Obat $obat)
    {
        $request->validate([
            'nama_obat' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
        ]);

        $obat->update($request->all());

        return redirect()->route('admin.obat.index')->with('success', 'Obat updated successfully.');
    }

    public function destroy(Obat $obat)
    {
        $obat->delete();
        return redirect()->route('admin.obat.index')->with('success', 'Obat deleted successfully.');
    }
}
