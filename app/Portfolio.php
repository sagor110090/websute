<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{

    protected $table = 'portfolios';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';


    protected $fillable = ['project_name', 'porject_description', 'image'];

    
}
