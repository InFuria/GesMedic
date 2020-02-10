<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Invoices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
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

            $table->unsignedInteger('invoice_id')->unsigned();
            $table->foreign('invoice_id')->references('id')->on('invoices')->onDelete('cascade');

            $table->unsignedBigInteger('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');

            $table->bigInteger('quantity');
            $table->bigInteger('total');

            $table->timestamps();
        });

        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('invoice_id')->unsigned();
            $table->foreign('invoice_id')->references('id')->on('invoices')->onDelete('cascade');

            $table->boolean('status');

            $table->timestamps();
        });

        Schema::create('sales', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedInteger('invoice_id')->unsigned();
            $table->foreign('invoice_id')->references('id')->on('invoices')->onDelete('cascade');

            $table->unsignedBigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedInteger('till_id')->unsigned();
            $table->foreign('till_id')->references('id')->on('till')->onDelete('cascade');

        });


        Schema::create('till_transactions', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('till_id')->unsigned();
            $table->foreign('till_id')->references('id')->on('till')->onDelete('cascade');

            $table->unsignedBigInteger('detail_id')->unsigned()->nullable();
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
        Schema::dropIfExists('payment_methods');
        Schema::dropIfExists('invoices');
        Schema::dropIfExists('invoices_detail');
        Schema::dropIfExists('orders');
        Schema::dropIfExists('sales');
        Schema::dropIfExists('till_transactions');
    }
}
