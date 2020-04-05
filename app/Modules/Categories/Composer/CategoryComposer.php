<?php

namespace App\Modules\Categories\Composer;

use Illuminate\View\View;

class CategoryComposer
{
    public function compose(View $view)
    {
        $data = $view->getData();

        $component = new CategoryComponent($data);

        $view->with('component', $component);
    }
}