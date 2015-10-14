<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mocksections extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'mocksections';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['esec_id', 'noofquestions', 'noofmarks', 'created_by', 'modified_by'];

}
