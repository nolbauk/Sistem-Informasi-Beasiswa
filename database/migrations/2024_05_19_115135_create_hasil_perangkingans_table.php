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
        Schema::create('hasil_perangkingans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBiginteger('id_calon');
            $table->foreign('id_calon')->references('id')->on('calon_penerima_beasiswas');
            $table->string('hasil');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hasil_perangkingans');
    }
};
