<?php namespace Cris\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCrisMoviesGenre2 extends Migration
{
    public function up()
    {
        Schema::table('cris_movies_genre', function($table)
        {
            $table->renameColumn('id_genre', 'id');
        });
    }
    
    public function down()
    {
        Schema::table('cris_movies_genre', function($table)
        {
            $table->renameColumn('id', 'id_genre');
        });
    }
}
