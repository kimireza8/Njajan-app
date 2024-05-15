<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailTransactionsTable extends Migration
{
    public function up()
    {
        Schema::create('detail_transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('transaction_id');
            $table->unsignedInteger('product_id');
            $table->integer('quantity');
            $table->timestamps();

            $table->foreign('transaction_id')->references('transaction_id')->on('transactions');
            $table->foreign('product_id')->references('product_id')->on('products');
        });
    }

    public function down()
    {
        Schema::dropIfExists('detail_transactions');
    }
};
