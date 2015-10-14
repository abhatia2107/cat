<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat_statuses extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cat_statuses';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'created_by', 'modified_by'];

}
