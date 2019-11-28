<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBanerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baner', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('texto1')->nullable();
            $table->String('texto2')->nullable();
            $table->String('imagen')->nullable();
            $table->String('seccion')->nullable();
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
        Schema::dropIfExists('baner');
    }
}
