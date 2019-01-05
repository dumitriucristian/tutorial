<?php namespace Cris\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCrisMovies2 extends Migration
{
    public function up()
    {
        Schema::table('cris_movies_', function($table)
        {
            $table->string('name')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('cris_movies_', function($table)
        {
            $table->text('name')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
