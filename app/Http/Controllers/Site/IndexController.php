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

    public function contact()
    {
        $seo['title'] = 'Контакты';

        return view('site.contact')->with(compact('seo'));
      
    }

    public function about()
    {
        $seo['title'] = 'О компании';

        return view('site.about')->with(compact('seo'));
      
    }

}
