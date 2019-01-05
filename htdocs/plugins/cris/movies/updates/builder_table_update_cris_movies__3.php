<?php namespace Cris\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCrisMovies3 extends Migration
{
    public function up()
    {
        Schema::table('cris_movies_', function($table)
        {
            $table->string('name')->change();
            $table->integer('year')->nullable()->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('cris_movies_', function($table)
        {
            $table->string('name', 191)->change();
            $table->text('year')->nullable()->unsigned(false)->default(null)->change();
        });
    }
}
