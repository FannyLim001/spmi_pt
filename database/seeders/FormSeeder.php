<?php

namespace Database\Seeders;

use App\Models\Form;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $form =  [
            [
              'id_pt' => '1',
              'nama' => 'Test',
              'Jabatan' => 'testttt',
              'hasil' => 'Dosen dan Tenaga Kependidikan sudah mendapatkan pembayaran haknya secara rutin dan tepat waktu. Perguruan tinggi belum memiliki struktur organisasi yang sah. Evaluasi A.',
              'rekomendasi' => 'Dapat ditingkatkan kembali. Sebagai salah satu pondasi utama, dibutuhkan struktur organisasi yang sah. Dikembangkan kembali evaluasi A.',
            ],
          ];

          Form::Insert($form);
    }
}
