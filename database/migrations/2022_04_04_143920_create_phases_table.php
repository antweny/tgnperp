<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Artisan;
use Database\Seeders\PhaseSeeder;

class CreatePhasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phases', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->mediumText('descriptions')->nullable();
            $table->timestamps();
        });

        Artisan::call('db:seed',['--class'=>PhaseSeeder::class]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phases');
    }
}
