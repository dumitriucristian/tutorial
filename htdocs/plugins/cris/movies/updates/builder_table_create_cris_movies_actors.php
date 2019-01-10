<?php namespace Cris\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCrisMoviesActors extends Migration
{
    public function up()
    {
        Schema::create('cris_movies_actors', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('cris_movies_actors');
    }
}
