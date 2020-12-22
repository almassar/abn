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
use Illuminate\Support\Facades\DB;

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

    public function search(Request $request)
    {
        $seo['title'] = 'Результаты поиска';

        $search = $request->input('search');

        $products = DB::table('products')
                    ->where('name', 'like', "%$search%")
                    ->get();

        return view('site.search')->with(compact('products', 'search', 'seo'));
      
    }

    public function lang($lang)
    {
        if (! in_array($lang, ['en', 'es', 'fr'])) {
            abort(400);
        }
    
        \App::setLocale($lang);
        session(['lang' => $lang]);

        return redirect()->back();
      
    }

}
