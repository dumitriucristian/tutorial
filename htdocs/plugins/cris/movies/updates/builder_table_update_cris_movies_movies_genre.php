<?php namespace Cris\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCrisMoviesMoviesGenre extends Migration
{
    public function up()
    {
        Schema::table('cris_movies_movies_genre', function($table)
        {
            $table->integer('movie_id');
            $table->integer('genre_id');
            $table->dropColumn('id_movie');
            $table->dropColumn('id_genre');
            $table->primary(['movie_id','genre_id']);
        });
    }
    
    public function down()
    {
        Schema::table('cris_movies_movies_genre', function($table)
        {
            $table->dropPrimary(['movie_id','genre_id']);
            $table->dropColumn('movie_id');
            $table->dropColumn('genre_id');
            $table->integer('id_movie');
            $table->integer('id_genre');
        });
    }
}
