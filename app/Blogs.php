<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'blogs';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'category_id', 'photo', 'video_url', 'details'];

}
