<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Modules\Partners\Partner;
use App\Modules\Partners\PartnerRepository;
use Illuminate\Http\Request;

class PartnerController extends SiteBaseController
{
    private $partnerRepository;

    public function __construct(PartnerRepository $partnerRepository)
    {
        $this->partnerRepository = $partnerRepository;
    }

    public function index(Partner $news)
    {
        $seo['title'] = 'Партнеры';
        
        $partners = $this->partnerRepository->get();

        return view('site.partners')->with(compact('partners', 'seo'));
    }

}
