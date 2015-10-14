<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questionoptions extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'questionoptions';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['question_id', 'name', 'created_by', 'modified_by', 'status'];

}
