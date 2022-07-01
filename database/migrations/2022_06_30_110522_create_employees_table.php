<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->string('emp_id')->primary();
            $table->string('fname');
            $table->string('mname');
            $table->string('lname');
            $table->string('gender');
            $table->string('civil_status');
            $table->string('current_postal_address');
            $table->string('permanent_postal_address');
            $table->string('current_mobile');
            $table->string('permanent_mobile');
            $table->string('police_division');
            $table->string('email');
            $table->date('dob');
            $table->date('age_as_at_closing_date');
            $table->string('citizenship');
            $table->string('nic');
            $table->string('driving_licen_no');
            $table->string('driving_licen_issuing_date');
            $table->string('salary');
            $table->string('status');//active or suspend


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
        Schema::dropIfExists('employees');
    }
}
