<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{

    protected $table = 'solutions';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';


    protected $fillable = ['header', 'shortDescription', 'description', 'image','slug'];

    
}