<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class WorkInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_info', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('user_id');
            $table->Integer('branch_id');
            $table->Integer('subBranch_id');
            $table->Integer('point_id');
            $table->Integer('role_id'); 
            $table->Integer('position_id'); 
            $table->string('mobile');
            $table->date('volunteer_date');
            $table->date('start_volunteer_date');
            $table->date('hire_date');
            $table->boolean('introduction');
            $table->boolean('distribution');
            $table->boolean('registration');
            $table->boolean('Catastrophes');
            $table->boolean('Catastrophes_advence');
            $table->boolean('water_build');
            $table->boolean('PST');
            $table->boolean('ambulance');
            $table->boolean('asphere');
            $table->boolean('wfp');
            $table->boolean('cash');
            $table->boolean('livilhood');
            $table->string('other');
            $table->boolean('financial');
            $table->boolean('res_add');
            $table->Integer('shifts');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('work_info');
    }
}
