<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('positions', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('individual_id');
            $table->foreign('individual_id')->references('id')->on('individuals')->onDelete('restrict')->onUpdate('cascade');

            $table->unsignedBigInteger('title_id');
            $table->foreign('title_id')->references('id')->on('titles')->onDelete('restrict')->onUpdate('cascade');

            $table->unsignedBigInteger('organization_id');
            $table->foreign('organization_id')->references('id')->on('organizations')->onDelete('restrict')->onUpdate('cascade');

            $table->unsignedBigInteger('position_mode_id')->nullable();
            $table->foreign('position_mode_id')->references('id')->on('position_modes')->onDelete('set null')->onUpdate('cascade');

            $table->unsignedBigInteger('phase_id');
            $table->foreign('phase_id')->references('id')->on('phases')->onDelete('restrict')->onUpdate('cascade');

            $table->unsignedBigInteger('term_id');
            $table->foreign('term_id')->references('id')->on('terms')->onDelete('restrict')->onUpdate('cascade');

            $table->date('start_date');

            $table->date('end_date')->nullable();

            $table->unsignedBigInteger('exit_mode_id')->nullable();
            $table->foreign('exit_mode_id')->references('id')->on('exit_modes')->onDelete('set null')->onUpdate('cascade');

            $table->text('descriptions')->nullable();

            $table->boolean('isActive')->default(1);

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
        Schema::dropIfExists('positions');
    }
}
