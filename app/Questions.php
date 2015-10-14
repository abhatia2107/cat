<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'questions';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'description', 'image', 'totalhtml', 'solution', 'answer', 'status', 'created_by', 'modified_by', 'type', 'passage'];

}
