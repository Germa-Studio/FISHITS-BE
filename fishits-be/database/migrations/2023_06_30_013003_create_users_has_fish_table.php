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
        Schema::create('users_has_fish', function (Blueprint $table) {
            $table->integer('id', true);
            $table->unsignedBigInteger('users_id')->index('fk_users_has_fish_users1_idx');
            $table->unsignedBigInteger('fish_id')->index('fk_users_has_fish_fish1_idx');
            $table->double('berat', 10, 6)->nullable();
            $table->string('satuanBerat')->nullable();
            $table->string('harga', 45)->nullable();
            $table->double('bbmTerpakai', 10, 6)->nullable();
            $table->double('jarakTempuh', 10, 6)->nullable();
            $table->integer('pengeluaran')->nullable();
            $table->integer('pendapatan')->nullable();
            $table->integer('keuntungan')->nullable();
            $table->date('tanggal')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_has_fish');
    }
};
