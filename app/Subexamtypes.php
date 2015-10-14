<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Subexamtypes extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'subexamtypes';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['etype', 'name', 'created_by', 'modified_by', 'status'];

}
