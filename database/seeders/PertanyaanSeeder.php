<?php

namespace Database\Seeders;

use App\Models\Pertanyaan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PertanyaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pertanyaan =  [
            [
              'pertanyaan' => 'Apakah Dosen dan Tenaga Kependidikan sudah menerima hak yang layak berdasarkan kewajiban dan tanggung jawab yang diampu? (aspek kebutuhan dasar kesejahteraan)',
              'id_kategori' => '1',
              'id_tipe' => '1',
            ],
            [
              'pertanyaan' => 'Apakah Perguruan Tinggi telah memiliki Struktur Organisasi yang Sah?',
              'id_kategori' => '2',
              'id_tipe' => '1',
            ],
            [
              'pertanyaan' => 'Apa saja evaluasi yang telah dilakukan?',
              'id_kategori' => '6',
              'id_tipe' => '2',
            ],
          ];

          Pertanyaan::Insert($pertanyaan);
    }
}
