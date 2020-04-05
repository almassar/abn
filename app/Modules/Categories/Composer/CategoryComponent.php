<?php

namespace App\Modules\Categories\Composer;

use Illuminate\Support\Str;

class CategoryComponent
{
    public $data = [];

    public $level = 0;

    public function __construct($data)
    {
        $categoryRepository = $data['repository'];

        $this->data['repository'] = $data['repository'];
        $this->data['categories']  = $data['categories']  ?? $categoryRepository->roots();
        $this->data['isCheckbox']  = $data['isCheckbox']  ?? false;
        $this->data['categoryIds'] = $data['categoryIds'] ?? [];
        $this->data['prefixUrl']   = $data['prefixUrl']   ?? '#';
        $this->data['urlType']     = $data['urlType']     ?? 'id';
        $this->level = $data['level'] ?? 0;
    }

    public function url($category)
    {
        $result = $this->data['prefixUrl'];

        /* Query string request */
        if (strpos($this->data['prefixUrl'], '?') !== false)
        {
            if(! Str::endsWith($this->data['prefixUrl'], '?'))
                $result = $result.'&';

            $result = $result.'categoryId='.$category->id;

        }else{
            $result = $result.'/'.(  $this->data['urlType']  == 'slug' ? $category->slug : $category->id);
        }

        return url($result);
    }

    public function checked($categoryId)
    {
        return in_array($categoryId,  $this->data['categoryIds']) ? 'checked' : '';
    }
}