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
        Schema::create('pengawasans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('datadesa_id');
            $table->string('objek');
            $table->string('hasil');
            $table->string('tindak');
            $table->timestamps();

            $table->foreign('datadesa_id')->references('id')->on('datadesas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengawasans');
    }
};
