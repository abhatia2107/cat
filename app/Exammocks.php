<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Exammocks extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'exammocks';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['template_id', 'title', 'noofquestions', 'time', 'created_by', 'modified_by', 'status'];

}
