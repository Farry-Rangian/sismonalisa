<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('anggarans', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_usaha');
            $table->bigInteger('modal'); // Untuk modal
            $table->bigInteger('uang_masuk'); // Untuk uang masuk
            $table->bigInteger('uang_keluar'); // Untuk uang keluar
            $table->bigInteger('keuntungan'); // Untuk keuntungan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggarans');
    }
};
