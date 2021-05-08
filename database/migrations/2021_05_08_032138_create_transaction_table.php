<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction', function (Blueprint $table) {
            
                $table->increments('id');
                $table->string('transaction_code');
                $table->integer('id_member')->unsigned();
                $table->foreign('id_member')->references('id')->on('member')->onDelete('cascade');
                $table->integer('id_book')->unsigned();
                $table->foreign('id_book')->references('id')->on('book')->onDelete('cascade');
                $table->date('date_borrow');
                $table->date('date_return');
                $table->enum('status', ['borrow', 'return']);
                $table->text('information')->nullable();
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
        Schema::dropIfExists('transaction');
    }
}
