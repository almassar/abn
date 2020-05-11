<?php

namespace App\Modules\Products;

use App\Modules\Categories\Category;
use App\Modules\Types\Type;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'category_id', 'type_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
