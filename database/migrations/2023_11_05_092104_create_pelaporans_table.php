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
        Schema::create('pelaporans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('datadesa_id');
            $table->boolean('laporan_semester');
            $table->boolean('proposal');
            $table->boolean('kwitansi');
            $table->boolean('dokumentasi');
            $table->date('tanggal');
            $table->timestamps();

            $table->foreign('datadesa_id')->references('id')->on('datadesas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelaporans');
    }
};
