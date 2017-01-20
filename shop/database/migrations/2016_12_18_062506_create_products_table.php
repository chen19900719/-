<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category_id');
            $table->string('brand_id');
            $table->string('name');
            $table->string('stock');
            $table->string('thumb');
            $table->boolean('is_onsale')->default(true);//默认值true
            $table->boolean('is_top')->default(true);//默认值true
            $table->boolean('is_recommend')->default(true);//默认值true
            $table->boolean('is_hot')->default(true);//默认值true
            $table->boolean('is_new')->default(true);//默认值true
            $table->text('desc');
            $table->text('content');
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
        //
    }
}
