<?php

namespace Database\Seeders;

use App\Models\Tipe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipe =  [
            [
              'tipe' => 'radiobutton',
            ],
            [
              'tipe' => 'checkbox',
            ]
          ];

          Tipe::Insert($tipe);
          
    }
}
