<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id('bookid')->autoIncrement();
            $table->unsignedBigInteger('authorid');
            $table->foreign('authorid')->references('id')->on('authors');
            $table->string('title');
            $table->string('ISBN');
            $table->integer('pub_year');
            $table->integer('available');  //1: available 2:unavailable
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
