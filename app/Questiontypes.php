<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Questiontypes extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'questiontypes';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['template_id', 'name', 'created_by', 'modified_by'];

}
