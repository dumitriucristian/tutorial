<?php namespace Cris\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCrisMovies4 extends Migration
{
    public function up()
    {
        Schema::table('cris_movies_', function($table)
        {
            $table->string('name')->change();
        });
    }
    
    public function down()
    {
        Schema::table('cris_movies_', function($table)
        {
            $table->string('name', 191)->change();
        });
    }
}
