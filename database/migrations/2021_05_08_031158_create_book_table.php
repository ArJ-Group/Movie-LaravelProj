<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('isbn', 25)->nullable();
            $table->string('author')->nullable();
            $table->string('publisher')->nullable();
            $table->integer('publish_year')->nullable();
            $table->integer('numbers_of_book');
            $table->text('description')->nullable();
            $table->enum('location', ['bookshelf1', 'bookshelf2', 'bookshelf3'])->nullable();
            $table->string('cover')->nullable();
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
        Schema::dropIfExists('book');
    }
}
