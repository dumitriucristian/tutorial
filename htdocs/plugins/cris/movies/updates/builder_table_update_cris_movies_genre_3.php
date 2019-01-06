<?php namespace Cris\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCrisMoviesGenre3 extends Migration
{
    public function up()
    {
        Schema::table('cris_movies_genre', function($table)
        {
            $table->renameColumn('title', 'genre_title');
        });
    }
    
    public function down()
    {
        Schema::table('cris_movies_genre', function($table)
        {
            $table->renameColumn('genre_title', 'title');
        });
    }
}
