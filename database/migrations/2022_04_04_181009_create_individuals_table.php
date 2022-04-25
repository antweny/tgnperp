<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndividualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('individuals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('sex', ['Male','Female']);
            $table->mediumText('address')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email')->unique()->nullable();
            $table->boolean('isActive')->default(1);
            $table->unique(['name','mobile']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('individuals');
    }
}
