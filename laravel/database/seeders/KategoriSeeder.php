<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['kategori_id' => '1',
            'kategori_kode' => 'FOD',
            'kategori_nama' => 'Food',],
            ['kategori_id' => '2',
            'kategori_kode' => 'BEV',
            'kategori_nama' => 'Beverage',],
            ['kategori_id' => '3',
            'kategori_kode' => 'BEU',
            'kategori_nama' => 'Beauty',],
            ['kategori_id' => '4',
            'kategori_kode' => 'HEA',
            'kategori_nama' => 'Health',],
            ['kategori_id' => '5',
            'kategori_kode' => 'HMC',
            'kategori_nama' => 'Home Care',],
        ];
        DB::table('m_kategori')->insert($data);
    }
}
