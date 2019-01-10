<?php namespace Cris\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCrisMoviesMoviesActor2 extends Migration
{
    public function up()
    {
        Schema::table('cris_movies_movies_actor', function($table)
        {
            $table->integer('actor_id')->unsigned()->change();
            $table->integer('movie_id')->unsigned()->change();
        });
    }
    
    public function down()
    {
        Schema::table('cris_movies_movies_actor', function($table)
        {
            $table->integer('actor_id')->unsigned(false)->change();
            $table->integer('movie_id')->unsigned(false)->change();
        });
    }
}
