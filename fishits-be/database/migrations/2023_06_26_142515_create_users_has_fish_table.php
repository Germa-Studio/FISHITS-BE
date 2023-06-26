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
            $table->unsignedBigInteger('users_id')->index('fk_users_has_fish_users1_idx');
            $table->unsignedBigInteger('fish_id')->index('fk_users_has_fish_fish1_idx');
            $table->integer('amount')->nullable();
            $table->double('bbm', 10, 6)->nullable();
            $table->timestamps();

            $table->primary(['users_id', 'fish_id']);
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
