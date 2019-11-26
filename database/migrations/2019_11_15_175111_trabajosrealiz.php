<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Trabajosrealiz extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('trabajosrealiz', function (Blueprint $table){
    
        $table->bigIncrements('id');
        $table->string('titulo');       
        $table->String('imagen');        
        $table->String('texto')->nullable();
        $table->String('orden')->nullable();
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
        //
    }
}
