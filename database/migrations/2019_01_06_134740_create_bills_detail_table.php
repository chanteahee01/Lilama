<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillsDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills_detail', function (Blueprint $table) {
           $table->increments('id');
            $table->unsignedInteger('id_bills');
            $table->unsignedInteger('id_product');
            $table->integer('price');
            $table->integer('quanity');
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
        Schema::dropIfExists('bills_detail');
    }
}
