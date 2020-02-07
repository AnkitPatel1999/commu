<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('Users', function(Blueprint $table){
            $table->increments('id');
            $table->string('fname'); 
            $table->string('sname');
            $table->date('bday');
            $table->string('profession');
            $table->string('dept');
            $table->string('sem');
            $table->string('email');
            $table->string('password');
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
        Schema::dropIfExists('Users');
    }
}
