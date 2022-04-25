<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizations', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('acronym')->nullable();
            $table->enum('tier', ['Central','Local','Other']);

            $table->unsignedBigInteger('branch_id');
            $table->foreign('branch_id')->references('id')->on('branches')->onDelete('restrict')->onUpdate('cascade');

            $table->unsignedBigInteger('type_id')->nullable();
            $table->foreign('type_id')->references('id')->on('types')->onDelete('set null')->onUpdate('cascade');

            $table->unsignedBigInteger('group_id')->nullable();
            $table->foreign('group_id')->references('id')->on('groups')->onDelete('set null')->onUpdate('cascade');

            $table->unsignedBigInteger('location_id')->nullable();
            $table->foreign('location_id')->references('id')->on('locations')->onDelete('set null')->onUpdate('cascade');

            $table->mediumText('address')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email')->unique()->nullable();
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
        Schema::dropIfExists('organizations');
    }
}
