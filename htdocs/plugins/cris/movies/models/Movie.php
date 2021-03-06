<?php namespace Cris\Movies\Models;

use Model;

/**
 * Model
 */
class Movie extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'cris_movies_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachOne = [
        'poster' => 'System\Models\File'
    ];

    public $attachMany = [
        'gallery' => 'System\Models\File'
    ];

    public $belongsToMany = [
        'genre' => ['Cris\Movies\Models\Genre', 'table' => 'cris_movies_movies_genre'],
        'actors' => ['Cris\Movies\Models\Actor', 'table' => 'cris_movies_movies_actors']
    ];
}
