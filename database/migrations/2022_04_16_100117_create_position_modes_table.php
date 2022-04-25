<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Artisan;
use Database\Seeders\PositionModeSeeder;

class CreatePositionModesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('position_modes', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->mediumText('descriptions')->nullable();
            $table->timestamps();
        });

        Artisan::call('db:seed',['--class'=>PositionModeSeeder::class]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('position_modes');
    }
}