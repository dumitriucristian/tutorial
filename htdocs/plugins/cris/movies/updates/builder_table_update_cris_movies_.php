<?php namespace Cris\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCrisMovies extends Migration
{
    public function up()
    {
        Schema::table('cris_movies_', function($table)
        {
            $table->text('name');
            $table->text('description')->nullable();
            $table->text('year')->nullable();
            $table->increments('id')->unsigned(false)->change();
        });
    }

    public function down()
    {
        Schema::table('cris_movies_', function($table)
        {
            $table->dropColumn('name');
            $table->dropColumn('description');
            $table->dropColumn('year');
            $table->increments('id')->unsigned()->change();
        });
    }
}
