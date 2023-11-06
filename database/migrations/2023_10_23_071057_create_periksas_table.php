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
        Schema::create('periksas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pasien')->nullable(); // Kolom rujukan ke tabel pasien
            $table->unsignedBigInteger('id_dokter')->nullable(); // Kolom rujukan ke tabel dokter
            $table->date('tanggal_periksa');
            $table->text('catatan');
            $table->text('obat');
            $table->timestamps();
            $table->foreign('id_pasien')->references('id')->on('pasiens')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('id_dokter')->references('id')->on('dokters')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('periksas');
    }
};
