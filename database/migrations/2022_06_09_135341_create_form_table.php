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
        Schema::create('form', function (Blueprint $table) {
            $table->increments('id_form');
            $table->unsignedBigInteger('id_pt');
            $table->foreign('id_pt')
              ->references('id')->on('pts')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nama');
            $table->string('jabatan');
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
        Schema::dropIfExists('form');
    }
};
