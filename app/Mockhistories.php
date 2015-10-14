<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mockhistories extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'mockhistories';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'mock_id', 'marks', 'aggregatepercentile', 'percentage', 'attemptedquestions', 'unattemptedquestions', 'wronganswers', 'correctanswers', 'accuracy', 'timetaken', 'created_by', 'modified_by', 'status'];

}
