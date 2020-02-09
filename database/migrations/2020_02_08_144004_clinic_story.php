<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ClinicStory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinic_story', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('client_id')->unsigned();
            $table->foreign('client_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('studies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('clinic_story_id')->unsigned();
            $table->foreign('clinic_story_id')->references('id')->on('clinic_story')->onDelete('cascade');
            $table->string('description');
            $table->timestamps();
        });

        Schema::create('observations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('clinic_story_id')->unsigned();
            $table->foreign('clinic_story_id')->references('id')->on('clinic_story')->onDelete('cascade');
            $table->string('description');
            $table->timestamps();
        });

        Schema::create('studies_type', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');
            $table->string('minimum');
            $table->string('maximum');
        });

        Schema::create('studies_detail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('studies_id')->unsigned();
            $table->foreign('studies_id')->references('id')->on('studies')->onDelete('cascade');

            $table->unsignedInteger('studies_type_id')->unsigned();
            $table->foreign('studies_type_id')->references('id')->on('studies_type')->onDelete('cascade');

            $table->unsignedBigInteger('observations_id')->unsigned();
            $table->foreign('observations_id')->references('id')->on('observations')->onDelete('cascade');

            $table->string('result');
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
        Schema::dropIfExists('clinic_story');
        Schema::dropIfExists('studies');
        Schema::dropIfExists('observations');
        Schema::dropIfExists('studies_type');
        Schema::dropIfExists('studies_detail');
    }
}
