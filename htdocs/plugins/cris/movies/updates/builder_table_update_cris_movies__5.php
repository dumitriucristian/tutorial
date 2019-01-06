<?php namespace Cris\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCrisMovies5 extends Migration
{
    public function up()
    {
        Schema::table('cris_movies_', function($table)
        {
            $table->string('slug')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('cris_movies_', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
