<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pesanan;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function index()
    {
        $pesanan = Pesanan::latest()->paginate(15);
        return view('admin.pesanan.index', compact('pesanan'));
    }

    public function updateStatus(Request $request, Pesanan $pesanan)
    {
        $request->validate([
            'status' => 'required|in:pending,konfirmasi,selesai,batal'
        ]);
        $pesanan->update(['status' => $request->status]);
        return back()->with('success', 'Status pesanan diperbarui.');
    }

    public function destroy(Pesanan $pesanan)
    {
        $pesanan->delete();
        return back()->with('success', 'Pesanan dihapus.');
    }
}