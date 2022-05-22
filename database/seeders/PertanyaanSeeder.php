<?php

namespace Database\Seeders;

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
        DB::table('pertanyaans')->insertGetId([
            'pertanyaan' => 'Apa saja evaluasi yang telah dilakukan?',
            'kategori' => 'Evaluasi',
            'id_jawaban' => '3',
            'hasil' => 'Evaluasi belum dilakukan',
            'rekomendasi' => 'Diperbaiki kembali',
        ]);
    }
}
