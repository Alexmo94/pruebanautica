<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Createtableranking extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("ranking", function(Blueprint $table){
            $table -> increments('id');
            $table -> string('pelicula');
            $table -> integer('id_user') -> unsigned();
            $table -> foreign('id_user') -> references('id') -> on('users') -> ondelete('cascade');
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
