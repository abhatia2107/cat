<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Examsubtopics extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'examsubtopics';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['topic', 'name', 'created_by', 'modified_by', 'status'];

}
