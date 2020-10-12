<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'client';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';


    // protected $fillable = ['header', 'description','image'];
    protected $guarded=['old_image'];
}
