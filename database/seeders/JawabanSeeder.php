<?php

namespace Database\Seeders;

use App\Models\Jawaban;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JawabanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jwb =  [
            [
              'jawaban' => 'Dosen dan Tenaga Kependidikan belum mendapatkan pembayaran haknya secara rutin dan tepat waktu',
              'id_pertanyaan' => '1',
              'rekomendasi' => 'SPMI dapat diarahkan sebagai alat untuk memastikan pengelola dapat menunaikan kewajiban dalam membayarkan hak bagi dosen dan tenaga kependidikan secara ideal',
            ],
            [
                'jawaban' => 'Dosen dan Tenaga Kependidikan sudah mendapatkan pembayaran haknya secara rutin dan tepat waktu',
                'id_pertanyaan' => '1',
                'rekomendasi' => 'Dapat ditingkatkan kembali',
            ],
            [
                'jawaban' => 'Perguruan tinggi belum memiliki struktur organisasi yang sah',
                'id_pertanyaan' => '2',
                'rekomendasi' => 'Sebagai salah satu pondasi utama, dibutuhkan struktur organisasi yang sah',
            ],
            [
                'jawaban' => 'Perguruan tinggi sudah memiliki struktur organisasi yang sah',
                'id_pertanyaan' => '2',
                'rekomendasi' => 'Dipertahankan struktur organisasi yang sah nya',
            ],
            [
                'jawaban' => 'Evaluasi A',
                'id_pertanyaan' => '3',
                'rekomendasi' => 'Dikembangkan kembali evaluasi A',
            ],
            [
                'jawaban' => 'Evaluasi B',
                'id_pertanyaan' => '3',
                'rekomendasi' => 'Dikembangkan kembali evaluasi B',
            ],
          ];

          Jawaban::Insert($jwb);
    }
}
