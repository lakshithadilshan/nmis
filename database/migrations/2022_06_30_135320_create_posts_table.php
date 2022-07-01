<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('emp_id');
            $table->foreign('emp_id')->references('emp_id')->on('employees');
            $table->string('fname');
            $table->date('date');
            $table->time('time');
            $table->string('title');
            $table->string('location');
            $table->string('description');
            $table->string('picture');
            $table->integer('react_count');
            $table->integer('comment_count');
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
        Schema::dropIfExists('posts');
    }
}
