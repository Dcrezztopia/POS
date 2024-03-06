<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailPenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 30; $i++) {
            
            $barangId = rand(1, 10);
            
            
            $hargaJual = DB::table('m_barang')->where('barang_id', $barangId)->value('harga_jual');

            DB::table('t_penjualan_detail')->insert([
                'penjualan_id' => rand(1, 10), 
                'barang_id' => $barangId,
                'harga' => $hargaJual,
                'jumlah' => rand(1, 5), 
            ]);
        }
    }
}
