<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->integer('categoria_id')->unsigned();
            //$table->foreign('categoria_id')->references('id')->on('categorias');            
            $table->timestamps();
        });
        
        Schema::table('cursos', function (Blueprint $table) {
            $table->foreign('categoria_id')->references('id')->on('categorias');    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
}
