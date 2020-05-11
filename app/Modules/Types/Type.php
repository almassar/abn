<?php

namespace App\Modules\Types;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;


class Type extends Model
{
    protected $fillable = ['name', 'category_id'];
 }