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
        Schema::create('jawabans', function (Blueprint $table) {
            $table->increments('id_jawaban');
            $table->string('jawaban');
            $table->unsignedBigInteger('id_pertanyaan');
            $table->foreignId('id_pertanyaan')->constrained('pertanyaans');
            $table->string('hasil');
            $table->string('rekomendasi');
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
        Schema::dropIfExists('jawabans');
    }
};
