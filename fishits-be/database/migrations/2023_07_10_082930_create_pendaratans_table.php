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
        Schema::create('pendaratans', function (Blueprint $table) {
            $table->integer('id', true);
            $table->bigInteger('berat')->nullable();
            $table->bigInteger('harga')->nullable();
            $table->bigInteger('nilaiProduksi')->nullable();
            $table->string('monthYear', 6)->nullable();
            $table->unsignedBigInteger('fish_id')->index('fk_pendaratan_fish1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendaratans');
    }
};
