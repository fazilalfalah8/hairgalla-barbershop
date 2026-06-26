<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pesanan;

class DashboardController extends Controller
{
    public function index()
    {
        $totalPesanan = Pesanan::count();
        $pending = Pesanan::where('status', 'pending')->count();
        $konfirmasi = Pesanan::where('status', 'konfirmasi')->count();
        $selesai = Pesanan::where('status', 'selesai')->count();

        return view('admin.dashboard', compact('totalPesanan', 'pending', 'konfirmasi', 'selesai'));
    }
}