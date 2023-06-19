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
        Schema::create('fish_has_locations', function (Blueprint $table) {
            $table->unsignedBigInteger('fish_id')->index('fk_fish_has_locations_fish_idx');
            $table->unsignedBigInteger('locations_id')->index('fk_fish_has_locations_locations1_idx');

            $table->primary(['fish_id', 'locations_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fish_has_locations');
    }
};
