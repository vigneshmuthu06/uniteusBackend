<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $fillable = array('id', 'name', 'description','status','created_date','modified_date');
}
