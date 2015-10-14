<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mockhistorydetails extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'mockhistorydetails';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['history_id', 'question_id', 'attempted', 'questionstatus', 'created_by', 'modified_by', 'status'];

}
