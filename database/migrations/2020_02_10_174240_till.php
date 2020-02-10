<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Till extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions_type', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
        });

        Schema::create('till', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('branch_id')->unsigned();
            $table->foreign('branch_id')->references('id')->on('branches')->onDelete('cascade');

            $table->boolean('status');
            $table->bigInteger('opening_cash');
            $table->bigInteger('actual_cash');
            $table->bigInteger('close_cash');
        });

        Schema::create('till_audits', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('till_id')->unsigned();
            $table->foreign('till_id')->references('id')->on('till')->onDelete('cascade');

            $table->unsignedBigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedBigInteger('till_id')->unsigned();
            $table->foreign('till_id')->references('id')->on('till')->onDelete('cascade');

        });

        Schema::create('till_transactions', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('till_id')->unsigned();
            $table->foreign('till_id')->references('id')->on('till')->onDelete('cascade');

            $table->unsignedInteger('detail_id')->unsigned()->nullable();
            $table->foreign('detail_id')->references('id')->on('sales')->onDelete('cascade');

            $table->unsignedInteger('transaction_type_id')->unsigned();
            $table->foreign('transaction_type_id')->references('id')->on('transactions_type')->onDelete('cascade');

            $table->bigInteger('cash_before_op');
            $table->bigInteger('cash_after_op');

            $table->unsignedBigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('transactions_type');
        Schema::dropIfExists('till');
        Schema::dropIfExists('till_audits');
        Schema::dropIfExists('till_transactions');
    }
}
