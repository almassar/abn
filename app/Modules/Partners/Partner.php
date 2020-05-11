<?php

namespace App\Modules\Partners;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;


class Partner extends Model
{
    protected $fillable = ['name', 'description', 'link'] ;
 

}
