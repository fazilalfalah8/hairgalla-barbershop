<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name'     => 'Admin Hairgalla',
            'email'    => 'admin@hairgalla.com',
            'password' => Hash::make('hairgalla123'),
            'is_admin' => true,
        ]);
    }
}