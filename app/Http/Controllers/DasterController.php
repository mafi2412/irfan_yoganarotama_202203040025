<?php

namespace App\Http\Controllers;

use App\Models\Daster;
use Illuminate\Http\Request;

class DasterController extends Controller
{
    // Menampilkan semua data daster
    public function index()
    {
        $daster = Daster::all();
        return view('index', compact('daster'));
    }

    // Menampilkan form untuk menambahkan daster baru
    public function create()
    {
        return view('create');
    }

    // Menyimpan data daster baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'nama_daster' => 'required',
            'ukuran' => 'required',
            'stok' => 'required|integer',
            'harga' => 'required|numeric',
        ]);

        Daster::create($request->all());
        return redirect()->route('daster.index')->with('success', 'Daster berhasil ditambahkan.');
    }

    // Menampilkan form edit data daster
    public function edit(Daster $daster)
    {
        return view('edit', compact('daster'));
    }

    // Update data daster di database
    public function update(Request $request, Daster $daster)
    {
        $request->validate([
            'nama_daster' => 'required',
            'ukuran' => 'required',
            'stok' => 'required|integer',
            'harga' => 'required|numeric',
        ]);

        $daster->update($request->all());
        return redirect()->route('daster.index')->with('success', 'Data daster berhasil diupdate.');
    }

    // Menghapus data daster
    public function destroy(Daster $daster)
    {
        $daster->delete();
        return redirect()->route('daster.index')->with('success', 'Daster berhasil dihapus.');
    }
}


