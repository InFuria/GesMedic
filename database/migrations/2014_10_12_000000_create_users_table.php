<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');
        });

        Schema::create('documents_type', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');
            $table->unsignedInteger('country_id')->unsigned();
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
        });

        Schema::create('departments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
        });

        Schema::create('branches', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->unsignedInteger('department_id')->unsigned();
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
            $table->string('name');
            $table->string('address');
            $table->string('phone');
            $table->timestamps();
        });

        Schema::create('users_type', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug');
            $table->string('description');
            $table->timestamps();
        });

        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('ci');
            $table->string('name');
            $table->string('username')->unique();
            $table->bigInteger('phone');
            $table->string('address');
            $table->boolean('status');
            $table->unsignedInteger('type_id')->unsigned();
            $table->foreign('type_id')->references('id')->on('users_type')->onDelete('cascade');
            $table->unsignedInteger('branch_id')->unsigned();
            $table->foreign('branch_id')->references('id')->on('branches')->onDelete('cascade');
            $table->unsignedInteger('country_id')->unsigned();
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->unsignedInteger('document_type_id')->unsigned();
            $table->foreign('document_type_id')->references('id')->on('documents_type')->onDelete('cascade');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('countries');
        Schema::dropIfExists('documents_type');
        Schema::dropIfExists('departments');
        Schema::dropIfExists('branches');
        Schema::dropIfExists('users_type');
        Schema::dropIfExists('users');
    }
}
