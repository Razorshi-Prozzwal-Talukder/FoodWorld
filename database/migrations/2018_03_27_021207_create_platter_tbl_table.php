<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlatterTblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('platter_tbl', function (Blueprint $table) {
            $table->increments('platter_id');
            $table->string('platter_name');
            $table->string('platter_image');
            $table->string('platter_item');
            $table->string('platter_price');
            $table->string('platter_starting');
            $table->string('platter_finishing');
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
        Schema::dropIfExists('platter_tbl');
    }
}
