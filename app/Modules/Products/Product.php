<?php

namespace App\Modules\Products;

use App\Modules\Categories\Category;
use App\Modules\Cities\City;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Product extends Model
{
    use Notifiable;
    protected $guarded = [];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_company');
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
