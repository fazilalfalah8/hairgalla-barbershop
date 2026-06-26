<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;

class PesananController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nama'     => 'required|string|max:255',
            'whatsapp' => 'required|string|max:20',
            'layanan'  => 'required|string',
            'jadwal'   => 'required|date',
        ]);

        try {
            Pesanan::create([
                'nama'     => $request->nama,
                'whatsapp' => $request->whatsapp,
                'layanan'  => $request->layanan,
                'jadwal'   => $request->jadwal,
                'catatan'  => $request->catatan,
            ]);

            return redirect('/sukses');

        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
    }
}