<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    protected $table = 'service';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';


    // protected $fillable = ['header', 'description','image'];
    protected $guarded=['old_image'];
}
