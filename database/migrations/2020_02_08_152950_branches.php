<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Branches extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenses_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('service_number');
            $table->timestamps();
        });

        Schema::create('expenses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('description');
            $table->bigInteger('cost');

            $table->unsignedInteger('expenses_category_id')->unsigned();
            $table->foreign('expenses_category_id')->references('id')->on('expenses_categories')->onDelete('cascade');

            $table->unsignedInteger('branch_id')->unsigned();
            $table->foreign('branch_id')->references('id')->on('branches')->onDelete('cascade');

            $table->timestamps();
        });

        Schema::create('products_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
        });

        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug');
            $table->string('name');
            $table->string('description');
            $table->string('image');
            $table->bigInteger('price');

            $table->unsignedBigInteger('products_category_id')->unsigned();
            $table->foreign('products_category_id')->references('id')->on('products_categories')->onDelete('cascade');

            $table->timestamps();
        });

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

        Schema::create('payment_methods', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
        });

        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('branch_id')->unsigned();
            $table->foreign('branch_id')->references('id')->on('branches')->onDelete('cascade');

            $table->unsignedInteger('payment_method_id');
            $table->foreign('payment_method_id')->references('id')->on('payment_methods')->onDelete('cascade');

            $table->unsignedBigInteger('client_id')->unsigned();
            $table->foreign('client_id')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps();
        });

        Schema::create('invoices_detail', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedBigInteger('invoice_id')->unsigned();
            $table->foreign('invoice_id')->references('id')->on('invoices')->onDelete('cascade');

            $table->unsignedBigInteger('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');

            $table->bigInteger('quantity');
            $table->bigInteger('total');

            $table->timestamps();
        });

        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedBigInteger('invoice_id')->unsigned();
            $table->foreign('invoice_id')->references('id')->on('invoices')->onDelete('cascade');

            $table->boolean('status');

            $table->timestamps();
        });

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

        Schema::create('sales', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedBigInteger('invoice_id')->unsigned();
            $table->foreign('invoice_id')->references('id')->on('invoices')->onDelete('cascade');

            $table->unsignedBigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedInteger('till_id')->unsigned();
            $table->foreign('till_id')->references('id')->on('till')->onDelete('cascade');

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



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
