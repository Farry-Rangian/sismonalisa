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
        Schema::create('keuntungans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('datadesa_id');
            $table->string('penguatan_modal');
            $table->string('penasihat');
            $table->string('pengawas');
            $table->string('pelaksana');
            $table->string('anggota');
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
        Schema::dropIfExists('keuntungans');
    }
};
