<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('keyword');
            $table->string('password');
            $table->text('desc');
            $table->string('icp');
            $table->string('copyright');
            $table->string('author');
            $table->string('company');
            $table->string('qq');
            $table->string('email');
            $table->string('mobile_phone');
            $table->string('telephone');
            $table->text('fax');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('configs');
    }
}
