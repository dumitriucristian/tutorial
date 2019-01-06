<?php namespace Cris\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCrisMovies7 extends Migration
{
    public function up()
    {
        Schema::table('cris_movies_', function($table)
        {
            $table->renameColumn('id_movie', 'id');
        });
    }
    
    public function down()
    {
        Schema::table('cris_movies_', function($table)
        {
            $table->renameColumn('id', 'id_movie');
        });
    }
}
