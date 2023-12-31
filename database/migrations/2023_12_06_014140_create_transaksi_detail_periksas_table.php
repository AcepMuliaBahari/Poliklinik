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
        Schema::create('transaksi_detail_periksas', function (Blueprint $table) {
          
                $table->id();
                $table->unsignedBigInteger('id_periksa');
                $table->unsignedBigInteger('id_obat');
                // $table->integer('total_biaya');
                $table->timestamps();
                $table->foreign('id_periksa')->references('id')->on('periksas')->cascadeOnDelete()->cascadeOnUpdate();
                $table->foreign('id_obat')->references('id')->on('obats')->cascadeOnDelete()->cascadeOnUpdate();
          
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi_detail_periksas');
    }
};
