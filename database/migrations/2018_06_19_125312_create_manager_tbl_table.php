<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManagerTblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manager_tbl', function (Blueprint $table) {
            $table->increments('manager_id');
            $table->string('manager_name');
            $table->string('manager_father_name');
            $table->string('manager_mother_name');
            $table->string('manager_email');
            $table->string('manager_password');
            $table->string('manager_phone');
            $table->string('manager_address');
            $table->string('manager_restaurent_name');
            $table->string('manager_restaurent_address');
            $table->string('manager_restaurent_phone');
            $table->string('manager_image');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('manager_tbl');
    }
}
