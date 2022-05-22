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
        Schema::create('pertanyaans', function (Blueprint $table) {
            $table->id();
            $table->string('pertanyaan');
            $table->unsignedinteger('id_kategori');
            $table->unsignedinteger('id_tipe');
            $table->foreignId('id_kategori')->constrained('kategori_pertanyaan');
            $table->foreignId('id_tipe')->constrained('tipe_pertanyaan');
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
        Schema::dropIfExists('pertanyaans');
        
    }
};
