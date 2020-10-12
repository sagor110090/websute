<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OurTeam extends Model
{
    protected $table = 'our_team';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';


    protected $fillable = ['name', 'designation','facebook', 'twitter','google_plus', 'linkedin','image'];
}
