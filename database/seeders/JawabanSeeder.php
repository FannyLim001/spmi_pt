<?php

namespace Database\Seeders;

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
        DB::table('jawabans')->insertGetId([
            'jawaban_positif' => 'A',
            'jawaban_negatif' => 'B',
            'jawaban_numerik' => '0',
        ]);
    }
}
