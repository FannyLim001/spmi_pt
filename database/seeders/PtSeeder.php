<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Pt;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pt::truncate();
        $csvData = fopen(base_path('database/csv/Data_Perguruan_Tinggi.csv'), 'r');
        $transRow = true;
        while (($data = fgetcsv($csvData, 555, ',')) !== false) {
            if (!$transRow) {
                Pt::create([
                    'lembaga' => $data['0'],
                    'kelompok_koordinator' => $data['1'],
                    'npsn' => $data['2'],
                    'nama_pt' => $data['3'],
                    'nm_bp' => $data['4'],
                    'provinsi_pt' => $data['5'],
                    'jln' => $data['6'],
                    'kec_pt' => $data['7'],
                    'kabupaten/kota' => $data['8'],
                    'website' => $data['9'],
                    'no_tel' => $data['10'],
                    'email' => $data['11'],
                    'password_pt' => $data['2'],
                    'total_mhs' => '2345',
                    'total_dosen' => '70',
                    'total_program' => '20',
                    'total_publikasi' => '2000'
                ]);
            }
            $transRow = false;
        }
        fclose($csvData);
    }
}
