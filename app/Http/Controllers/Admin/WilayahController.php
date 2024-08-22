<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Wilayah;
use Illuminate\Http\Request;

class WilayahController extends Controller
{
    // Display a listing of the resource
    public function index()
    {
        $wilayah = Wilayah::all();
        return view('admin.wilayah.index', compact('wilayah'));
    }

    // Show the form for creating a new resource
    public function create()
    {
        return view('admin.wilayah.create');
    }

    // Store a newly created resource in storage
    public function store(Request $request)
    {
        $request->validate([
            'nama_wilayah' => 'required|string|max:255',
        ]);

        Wilayah::create([
            'nama_wilayah' => $request->nama_wilayah,
        ]);

        return redirect()->route('admin.wilayah.index')->with('success', 'Wilayah created successfully.');
    }

    // Show the form for editing the specified resource
    public function edit(Wilayah $wilayah)
    {
        return view('admin.wilayah.edit', compact('wilayah'));
    }

    // Update the specified resource in storage
    public function update(Request $request, Wilayah $wilayah)
    {
        $request->validate([
            'nama_wilayah' => 'required|string|max:255',
        ]);

        $wilayah->update([
            'nama_wilayah' => $request->nama_wilayah,
        ]);

        return redirect()->route('admin.wilayah.index')->with('success', 'Wilayah updated successfully.');
    }

    // Remove the specified resource from storage
    public function destroy(Wilayah $wilayah)
    {
        $wilayah->delete();
        return redirect()->route('admin.wilayah.index')->with('success', 'Wilayah deleted successfully.');
    }
}
