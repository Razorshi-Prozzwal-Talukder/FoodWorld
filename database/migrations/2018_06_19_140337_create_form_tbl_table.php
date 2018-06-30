<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormTblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_tbl', function (Blueprint $table) {
            $table->increments('owner_id');
            $table->string('owner_name');
            $table->string('owner_father_name');
            $table->string('owner_mother_name');
            $table->string('owner_email');
            $table->string('owner_phone');
            $table->string('owner_address');
            $table->string('owner_restaurent_name');
            $table->string('owner_restaurent_address');
            $table->string('owner_restaurent_phone');
            $table->string('owner_image');
            $table->string('owner_open_time');
            $table->string('owner_close_time');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form_tbl');
    }
}
