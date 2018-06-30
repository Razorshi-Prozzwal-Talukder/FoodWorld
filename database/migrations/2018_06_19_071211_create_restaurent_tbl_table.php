<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurentTblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurent_tbl', function (Blueprint $table) {
                         $table->increments('restaurent_id');
                         $table->string('restaurent_name');
                         $table->string('restaurent_address');
                         $table->string('restaurent_phone');
                         $table->string('restaurent_open_time');
                         $table->string('restaurent_close_time');
                         $table->string('manager_id');
                         $table->integer('restaurent_rating');
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
        Schema::dropIfExists('restaurent_tbl');
    }
}
