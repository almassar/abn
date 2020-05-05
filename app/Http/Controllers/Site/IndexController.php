<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Modules\News\News;
use App\Modules\News\NewsRepository;
use Illuminate\Http\Request;

class IndexController extends SiteBaseController
{
    private $newsRepository;

    public function __construct(NewsRepository $newsRepository)
    {
        $this->newsRepository = $newsRepository;
    }
    
    public function index()
    {
        $seo['title'] = 'АБН технологии';

        $news = $this->newsRepository->orderBy('id', 'desc')->get()->take(4);
        
        return view('site.index')->with(compact('news', 'seo'));
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
