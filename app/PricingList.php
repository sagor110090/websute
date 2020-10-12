<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PricingList extends Model
{

    protected $table = 'pricing_lists';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';


    protected $fillable = ['pricing_name', 'short_description', 'price'];

    
}