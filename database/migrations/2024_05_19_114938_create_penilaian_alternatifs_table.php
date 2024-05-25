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
        Schema::create('penilaian_alternatifs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBiginteger('id_calon');
            $table->foreign('id_calon')->references('id')->on('calon_penerima_beasiswas');
            $table->unsignedBiginteger('id_kriteria');
            $table->foreign('id_kriteria')->references('id')->on('kriteria_penilaians');
            $table->integer('nilai_penilaian_alternatif');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penilaian_alternatifs');
    }
};
