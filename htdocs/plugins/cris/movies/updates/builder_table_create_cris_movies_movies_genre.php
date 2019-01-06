<?php namespace Cris\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCrisMoviesMoviesGenre extends Migration
{
    public function up()
    {
        Schema::create('cris_movies_movies_genre', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id_movie');
            $table->integer('id_genre');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('cris_movies_movies_genre');
    }
}
