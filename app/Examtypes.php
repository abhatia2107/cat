<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Examtypes extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'examtypes';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'created_by', 'modified_by', 'status'];

}
