<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    protected $table = 'pesanan';
    protected $fillable = ['nama', 'whatsapp', 'layanan', 'jadwal', 'catatan', 'status'];
    protected $casts = ['jadwal' => 'datetime'];
}