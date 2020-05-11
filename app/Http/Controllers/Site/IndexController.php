<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Modules\News\News;
use App\Modules\News\NewsRepository;
use App\Modules\Slides\Slide;
use App\Modules\Slides\SlideRepository;
use App\Modules\Partners\Partner;
use App\Modules\Partners\PartnerRepository;
use Illuminate\Http\Request;

class IndexController extends SiteBaseController
{
    private $newsRepository;
    private $slideRepository;

    public function __construct(NewsRepository $newsRepository, SlideRepository $slideRepository, PartnerRepository $partnerRepository)
    {
        $this->newsRepository  = $newsRepository;
        $this->slideRepository = $slideRepository;
        $this->partnerRepository = $partnerRepository;
    }
    
    public function index()
    {
        $seo['title'] = 'АБН технологии';

        $news   = $this->newsRepository->orderBy('id', 'desc')->get()->take(4);
        $slides = $this->slideRepository->get();
        $partners = $this->partnerRepository->get();
        
        return view('site.index')->with(compact('news', 'slides', 'partners', 'seo'));
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
