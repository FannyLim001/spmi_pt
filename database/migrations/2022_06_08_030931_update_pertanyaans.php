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
        Schema::table('pertanyaans', function (Blueprint $table) {
            $table->foreign('id_kategori')
              ->references('id_kategori')->on('kategori_pertanyaan')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_tipe')
              ->references('id_tipe')->on('tipe_pertanyaan')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
