<?php namespace Cris\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCrisMoviesMoviesActors extends Migration
{
    public function up()
    {
        Schema::rename('cris_movies_movies_actor', 'cris_movies_movies_actors');
    }
    
    public function down()
    {
        Schema::rename('cris_movies_movies_actors', 'cris_movies_movies_actor');
    }
}
