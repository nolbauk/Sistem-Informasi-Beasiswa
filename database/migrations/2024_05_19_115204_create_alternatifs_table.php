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
        Schema::create('alternatifs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBiginteger('id_prestasi');
            $table->foreign('id_prestasi')->references('id')->on('prestasis');
            $table->unsignedBiginteger('id_sub_kriteria');
            $table->foreign('id_sub_kriteria')->references('id')->on('sub_kriterias');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alternatifs');
    }
};
