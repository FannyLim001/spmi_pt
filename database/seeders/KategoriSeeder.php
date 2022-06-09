<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kat =  [
            [
              'kategori_pertanyaan' => 'Kebutuhan Dasar',
            ],
            [
              'kategori_pertanyaan' => 'Struktur Organisasi',
            ],
            [
              'kategori_pertanyaan' => 'Kesiapan Dasar Penjaminan Mutu',
            ],
            [
              'kategori_pertanyaan' => 'Dokumen Mutu',
            ],
            [
              'kategori_pertanyaan' => 'Pelaksanaan SPMI',
            ],
            [
              'kategori_pertanyaan' => 'Evaluasi',
            ],
            [
              'kategori_pertanyaan' => 'Tindak Lanjut Evaluasi',
            ],
            [
              'kategori_pertanyaan' => 'Peningkatan Mutu',
            ],
          ];

          Kategori::Insert($kat);
    }
}
