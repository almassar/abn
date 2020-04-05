<?php

namespace App\Modules\Categories\Observer;

use App\Modules\Categories\Category;
use Illuminate\Support\Str;

class CategoryObserver
{
    public function creating(Category $category)
    {
        if ($category->parent_id == null)
        {
            $maxRightKey = (Category::max('right_key') ?? 0) + 1;

        } else{

            $maxRightKey = Category::find($category->parent_id)->right_key;

            Category::where([['right_key', '>=', $maxRightKey], ['left_key', '<', $maxRightKey]])->increment('right_key', 2);
            Category::where('left_key', '>', $maxRightKey)->increment('right_key', 2);
            Category::where('left_key', '>', $maxRightKey)->increment('left_key',  2);
        }

        $category->left_key  = $maxRightKey;
        $category->right_key = $maxRightKey + 1;
        $category->slug     = Str::slug($category->name);
    }
}