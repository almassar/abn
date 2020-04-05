<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Modules\Cities\CityRepository;
use Illuminate\Http\Request;

class IndexController extends SiteBaseController
{
    public function index()
    {
        return view('site.index');
    }
}
