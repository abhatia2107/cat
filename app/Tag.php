<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tags';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tag'];

    public function blogs()
    {
        return $this->belongsToMany('App\Blogs', 'blog_tag', 'tag_id', 'blog_id');
    }

}
