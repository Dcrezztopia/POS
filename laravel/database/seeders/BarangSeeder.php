<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['barang_id' => 1,
            'kategori_id' => 1,
            'barang_kode' => 'HTM',
            'barang_nama' => 'Happy Tos Merah',
            'harga_beli' => 7000,
            'harga_jual' => 10000,
        ],
            ['barang_id' => 2,
            'kategori_id' => 1,
            'barang_kode' => 'YSK',
            'barang_nama' => 'Yummy Sosis Keju',
            'harga_beli' => 8500,
            'harga_jual' => 12000,
        ],
            ['barang_id' => 3,
            'kategori_id' => 2,
            'barang_kode' => 'TKO',
            'barang_nama' => 'Teh Kotak Ori',
            'harga_beli' => 2000,
            'harga_jual' => 3500,
        ],
            ['barang_id' => 4,
            'kategori_id' => 2,
            'barang_kode' => 'UMC',
            'barang_nama' => 'Ultra Milk Cokelat',
            'harga_beli' => 2000,
            'harga_jual' => 4000,
        ],
            ['barang_id' => 5,
            'kategori_id' => 3,
            'barang_kode' => 'CRS',
            'barang_nama' => 'Carasun',
            'harga_beli' => 40000,
            'harga_jual' => 45000,
        ],
            ['barang_id' => 6,
            'kategori_id' => 3,
            'barang_kode' => 'KFW',
            'barang_nama' => 'Kaf Face Wash',
            'harga_beli' => 30000,
            'harga_jual' => 38000,
        ],
            ['barang_id' => 7,
            'kategori_id' => 4,
            'barang_kode' => 'TAH',
            'barang_nama' => 'Tolak Angin Habatussauda',
            'harga_beli' => 7000,
            'harga_jual' => 10000,
        ],
            ['barang_id' => 8,
            'kategori_id' => 4,
            'barang_kode' => 'DTB',
            'barang_nama' => 'Diatab',
            'harga_beli' => 1000,
            'harga_jual' => 2500,
        ],
            ['barang_id' => 9,
            'kategori_id' => 5,
            'barang_kode' => 'WPS',
            'barang_nama' => 'Wipol Sedang',
            'harga_beli' => 5000,
            'harga_jual' => 7000,
        ],
            ['barang_id' => 10,
            'kategori_id' => 5,
            'barang_kode' => 'GMB',
            'barang_nama' => 'Glade Mix Berries',
            'harga_beli' => 1000,
            'harga_jual' => 3000,
        ],
            ];
            DB::table('m_barang')->insert($data);
    }
}
