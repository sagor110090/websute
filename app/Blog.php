<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    protected $table = 'blogs';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';


    // protected $fillable = ['header', 'shortDescription', 'description', 'tag', 'thumbnail', 'image', 'slug', 'blog_category_id'];
    protected $guarded=['old_thumbnail','old_image'];

    public function blog_category()
    {
        return $this->belongsTo('App\BlogCategory','blog_category_id');
    }

}
