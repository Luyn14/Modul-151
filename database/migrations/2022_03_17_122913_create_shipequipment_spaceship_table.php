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
        Schema::create('shipequipment_spaceship', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('spaceship_id');
            $table->unsignedBigInteger('shipequipment_id');
            $table->integer('amount');
            $table->timestamps();
            $table->foreign('spaceship_id')->references('id')->on('spaceships')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('shipequipment_id')->references('id')->on('shipequipments')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shipequipment_spaceship');
    }
};
