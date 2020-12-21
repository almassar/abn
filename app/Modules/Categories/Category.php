<?php

namespace App\Modules\Categories;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

use App\Modules\Types\Type;


class Category extends Model
{
    protected $fillable = ['name'];
 
    public function types()
    {
        return $this->hasMany(Type::class);
    }
}
