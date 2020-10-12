<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'project';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';


    protected $guarded=['old_thumbnail','old_image'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

}