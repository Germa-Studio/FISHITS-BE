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
        Schema::table('pendaratans', function (Blueprint $table) {
            $table->foreign(['fish_id'], 'fk_pendaratan_fish1')->references(['id'])->on('fish')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pendaratans', function (Blueprint $table) {
            $table->dropForeign('fk_pendaratan_fish1');
        });
    }
};
