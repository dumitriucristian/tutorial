<?php namespace Cris\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCrisMoviesMoviesActors extends Migration
{
    public function up()
    {
        Schema::create('cris_movies_movies_actors', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('actor_id');
            $table->integer('movie_id');
            $table->primary(['actor_id','movie_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('cris_movies_movies_actors');
    }
}
