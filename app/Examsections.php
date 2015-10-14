<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Examsections extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'examsections';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['setype', 'name', 'created_by', 'modified_by'];

}
