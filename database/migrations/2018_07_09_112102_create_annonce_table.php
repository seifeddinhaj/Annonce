<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnnonceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annonce', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title','40');
            $table->double('price',15,4);
            
            $table->string('description','250');
            $table->string('type','60');
            $table->string('adresse','40');
            $table->integer('user_id')->unsigned();
        $table->foreign('user_id')->references('id')->on('users');
             $table->integer('categories_id')->unsigned();
        $table->foreign('categories_id')->references('id')->on('categories');


        $table->integer('subcategory_id')->unsigned();
        $table->foreign('subcategory_id')->references('id')->on('subcategory');
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
        Schema::drop('annonce');
    }
}
