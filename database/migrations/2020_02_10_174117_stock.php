<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Stock extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');

            $table->unsignedInteger('branch_id')->unsigned();
            $table->foreign('branch_id')->references('id')->on('branches')->onDelete('cascade');

            $table->bigInteger('quantity');

            $table->timestamps();
        });

        Schema::create('stock_record_type', function (Blueprint $table) {
            $table->increments('id');

            $table->string('description');
        });

        Schema::create('stock_record', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('stock_id')->unsigned();
            $table->foreign('stock_id')->references('id')->on('stock')->onDelete('cascade');

            $table->unsignedInteger('stock_record_type_id')->unsigned();
            $table->foreign('stock_record_type_id')->references('id')->on('stock_record_type')->onDelete('cascade');

            $table->unsignedBigInteger('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');

            $table->bigInteger('old_quantity');
            $table->bigInteger('new_quantity');

            $table->unsignedBigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps();
        });

        Schema::create('stock_audits', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->boolean('status');
            $table->timestamps();
        });

        Schema::create('stock_audits_detail', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('stock_audit_id')->unsigned();
            $table->foreign('stock_audit_id')->references('id')->on('stock_audits')->onDelete('cascade');

            $table->unsignedBigInteger('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');

            $table->bigInteger('digital_declared');
            $table->bigInteger('material_declared');

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
        Schema::dropIfExists('stock');
        Schema::dropIfExists('stock_record_type');
        Schema::dropIfExists('stock_record');
        Schema::dropIfExists('stock_audits');
        Schema::dropIfExists('stock_audits_detail');
    }
}
