<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('product_id');
            $table->string('product_name');
            $table->decimal('product_price', 10, 2);
            $table->unsignedInteger('store_id');
            $table->unsignedInteger('product_category');
            $table->string('product_image')->nullable();
            $table->foreign('store_id')->references('store_id')->on('stores');
            $table->foreign('product_category')->references('category_id')->on('categories');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
};
