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
            $table->decimal('berat', 10, 0)->nullable();
            $table->decimal('harga', 10, 0)->nullable();
            $table->integer('nilaiProduksi')->nullable();
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
