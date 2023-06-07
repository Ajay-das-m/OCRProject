<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->integer('timesheet_no');
            $table->string('name');
            $table->string('postion');
            $table->string('workplace');
            $table->string('date');
            $table->string('day');
            $table->time('start_time');
            $table->time('end_time');
            $table->string('break_time');
            $table->string('total_hours_worked');
            $table->integer('post_code');
            $table->string('mileage');
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
        Schema::dropIfExists('admins');
    }
}
