<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Modules\News\News;
use App\Modules\News\NewsRepository;
use Illuminate\Http\Request;

class NewsController extends SiteBaseController
{
    private $newsRepository;

    public function __construct(NewsRepository $newsRepository)
    {
        $this->newsRepository = $newsRepository;
    }

    public function index(News $news)
    {
        $seo['title'] = 'Новости';
        
        $newsList = $this->newsRepository->orderBy('id', 'desc')->paginate();

        return view('site.news')->with(compact('newsList', 'seo'));
    }

    public function newsView(News $news)
    {
        $seo['title'] = $news->name;

        return view('site.news-view')->with(compact('news', 'seo'));
    }
}
