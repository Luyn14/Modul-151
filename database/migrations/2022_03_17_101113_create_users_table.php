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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('birthday');
            $table->string('password');
            $table->unsignedBigInteger('crewrolefid');
            $table->unsignedBigInteger('shipfid');
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('crewrolefid')->references('id')->on('crewroles')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('shipfid')->references('id')->on('spaceships')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
