<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendences', function (Blueprint $table) {
            $table->id();
            $table->string('emp_id');
            $table->foreign('emp_id')->references('emp_id')->on('employees');
            $table->string('fname');
            $table->time('arrival time');
            $table->time('leave_time');
            $table->string('status');
            $table->date('date');
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
        Schema::dropIfExists('attendences');
    }
}
