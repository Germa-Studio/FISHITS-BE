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
        Schema::table('fish', function (Blueprint $table) {
            $table->foreign(['locations_id'], 'fk_fish_locations1')->references(['id'])->on('locations')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fish', function (Blueprint $table) {
            $table->dropForeign('fk_fish_locations1');
        });
    }
};
