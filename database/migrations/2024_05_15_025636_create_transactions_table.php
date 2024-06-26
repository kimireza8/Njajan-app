<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->uuid('transaction_id')->primary();
            $table->uuid('user_id');
            $table->uuid('store_id');
            $table->decimal('total_transaction', 10, 2);
            $table->timestamps();

            $table->foreign('user_id')->references('user_id')->on('users');
            $table->foreign('store_id')->references('store_id')->on('stores');
        });
    }

    public function down()
    {
        Schema::dropIfExists('transactions');
    }
};

