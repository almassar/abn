<?php

namespace App\Modules\Views;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Modules\Views\View;
use App\Modules\Types\Type;

class View extends Model
{
    protected $fillable = ['name', 'category_id', 'type_id'];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
 }