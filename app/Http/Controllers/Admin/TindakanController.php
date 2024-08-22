<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tindakan;

class TindakanController extends Controller
{
    // Display a listing of the resource
    public function index()
    {
        $tindakans = Tindakan::all(); // Retrieve all Tindakan records
        return view('admin.tindakan.index', compact('tindakans'));
    }

    // Show the form for creating a new resource
    public function create()
    {
        return view('admin.tindakan.create');
    }

    // Store a newly created resource in storage
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_tindakan' => 'required|string|max:255',
            'biaya' => 'required|numeric|min:0',
        ]);

        Tindakan::create($validated);

        return redirect()->route('admin.tindakan.index')->with('success', 'Tindakan created successfully.');
    }

    // Display the specified resource
    public function show(Tindakan $tindakan)
    {
        return view('admin.tindakan.show', compact('tindakan'));
    }

    // Show the form for editing the specified resource
    public function edit(Tindakan $tindakan)
    {
        return view('admin.tindakan.edit', compact('tindakan'));
    }

    // Update the specified resource in storage
    public function update(Request $request, Tindakan $tindakan)
    {
        $validated = $request->validate([
            'nama_tindakan' => 'required|string|max:255',
            'biaya' => 'required|numeric|min:0',
        ]);

        $tindakan->update($validated);

        return redirect()->route('admin.tindakan.index')->with('success', 'Tindakan updated successfully.');
    }

    // Remove the specified resource from storage
    public function destroy(Tindakan $tindakan)
    {
        $tindakan->delete();

        return redirect()->route('admin.tindakan.index')->with('success', 'Tindakan deleted successfully.');
    }
}
