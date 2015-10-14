<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Templatetypes extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'templatetypes';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['setype_id', 'name', 'eachmarkcorrect', 'eachmarknegative', 'noofquestions', 'created_by', 'modified_by', 'status'];

}
