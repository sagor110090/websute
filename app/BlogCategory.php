<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{

    protected $table = 'blog_categories';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';


    protected $fillable = ['name','slug'];

    public function blog()
    {
        return $this->hasMany('App\Blog','blog_category_id');
    }

}
