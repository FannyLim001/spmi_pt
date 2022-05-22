<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pts', function (Blueprint $table) {
            $table->id();
            $table->string('lembaga');
            $table->string('kelompok_koordinator');
            $table->string('npsn')->unique();
            $table->string('nama_pt');
            $table->string('nm_bp');
            $table->string('provinsi_pt');
            $table->string('jln');
            $table->string('kec_pt');
            $table->string('kabupaten/kota');
            $table->string('website');
            $table->string('no_tel');
            $table->string('email');
            $table->string('password_pt');
            $table->string('total_mhs');
            $table->string('total_dosen');
            $table->string('total_program');
            $table->string('total_publikasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pts');
    }
};
