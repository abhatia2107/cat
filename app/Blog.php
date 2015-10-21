<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
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
    protected $fillable = ['title', 'category_id', 'photo', 'video_url', 'details', 'user_id'];

    /**
     * Rules that should be followed by the attributes.
     *
     * @var array
     */
    public static $rules = [
        'title'=>'required',
        'photo'=>'image',
        'details'=>'required'
    ];


    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function tag()
    {
        return $this->belongsToMany('App\Tag');
    }
}
