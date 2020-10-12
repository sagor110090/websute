<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'about';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';


    // protected $fillable = ['header', 'description','image'];
    protected $guarded=['old_image'];
}
