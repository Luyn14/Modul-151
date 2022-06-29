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
        Schema::create('spaceships', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('division_id');
            $table->unsignedBigInteger('spaceshiprole_id');
            $table->unsignedBigInteger('destinationMoon_id');
            $table->timestamps();
            $table->foreign('division_id')->references('id')->on('divisions')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('spaceshiprole_id')->references('id')->on('spaceshiproles')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('destinationMoon_id')->references('id')->on('destinationMoon')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spaceships');
    }
};
