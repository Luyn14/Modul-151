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
        Schema::create('ammunitionhold_spaceship', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('spaceship_id');
            $table->unsignedBigInteger('ammunitionhold_id');
            $table->integer('amount');
            $table->timestamps();
            $table->foreign('spaceship_id')->references('id')->on('spaceships')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('ammunitionhold_id')->references('id')->on('ammunitionholds')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ammunitionhold_spaceship');
    }
};
