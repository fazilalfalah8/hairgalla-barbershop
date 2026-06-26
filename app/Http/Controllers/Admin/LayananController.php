<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index()
    {
        $layanan = Layanan::all();
        return view('admin.layanan.index', compact('layanan'));
    }

    public function create()
    {
        return view('admin.layanan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'nullable',
        ]);
        Layanan::create($request->only('nama', 'harga', 'deskripsi'));
        return redirect('/admin/layanan')->with('success', 'Layanan berhasil ditambahkan.');
    }

    public function edit(Layanan $layanan)
    {
        return view('admin.layanan.edit', compact('layanan'));
    }

    public function update(Request $request, Layanan $layanan)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'nullable',
        ]);
        $layanan->update($request->only('nama', 'harga', 'deskripsi'));
        return redirect('/admin/layanan')->with('success', 'Layanan berhasil diupdate.');
    }

    public function destroy(Layanan $layanan)
    {
        $layanan->delete();
        return back()->with('success', 'Layanan berhasil dihapus.');
    }
}