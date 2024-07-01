<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PemasukanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pemasukan')->insert([
            [
                'sumber_pemasukan' => 'Pajak Bumi dan Bangunan',
                'jumlah' => 10000000.00,
                'tanggal' => Carbon::create('2024', '01', '15'),
                'keterangan' => 'PBB triwulan pertama',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'sumber_pemasukan' => 'Retribusi Pasar',
                'jumlah' => 2000000.00,
                'tanggal' => Carbon::create('2024', '02', '10'),
                'keterangan' => 'Retribusi pasar Januari',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'sumber_pemasukan' => 'Bantuan Pemerintah',
                'jumlah' => 5000000.00,
                'tanggal' => Carbon::create('2024', '03', '05'),
                'keterangan' => 'Bantuan dana desa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'sumber_pemasukan' => 'Pajak Reklame',
                'jumlah' => 1500000.00,
                'tanggal' => Carbon::create('2024', '04', '20'),
                'keterangan' => 'Pajak reklame triwulan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'sumber_pemasukan' => 'Sewa Gedung',
                'jumlah' => 3000000.00,
                'tanggal' => Carbon::create('2024', '05', '12'),
                'keterangan' => 'Sewa gedung serbaguna',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
