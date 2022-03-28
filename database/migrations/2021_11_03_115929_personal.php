<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Personal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("personal" , function (Blueprint $table){
            $table->bigIncrements('id');
            $table->unsignedInteger('nat_id');
            $table->string('fst_nm');
            $table->string('lst_nm');
            $table->string('mdl_nm');
            $table->string('mthr_nm');
            $table->string('gender');
            $table->string('birth_place');
            $table->date('birth_date');
            $table->string('marital_status');
            $table->unsignedInteger('mobile');
            $table->unsignedInteger('phone');
            $table->string('certificate_type');
            $table->string('certificate_Details');
            $table->string('engName');
            $table->string('shoes_size');
            $table->string('waist_size');
            $table->string('shoulders_size');

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
