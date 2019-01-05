<?php namespace Cris\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCrisMovies extends Migration
{
    public function up()
    {
        Schema::create('cris_movies_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('cris_movies_');
    }
}
