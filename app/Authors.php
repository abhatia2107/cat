<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Authors extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'authors';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'photo', 'fb', 'twitter', 'google', 'pinterest', 'about'];

}
