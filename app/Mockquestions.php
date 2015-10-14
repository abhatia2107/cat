<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mockquestions extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'mockquestions';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['section_id', 'question_id', 'eachmarkcorrect', 'eachmarknegative', 'created_by', 'modified_by', 'status'];

}
