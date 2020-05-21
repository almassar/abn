<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Modules\Videos\Video;
use App\Modules\Videos\VideoRepository;
use Illuminate\Http\Request;

class VideoController extends SiteBaseController
{
    private $videoRepository;

    public function __construct(VideoRepository $videoRepository)
    {
        $this->videoRepository = $videoRepository;
    }

    public function index(Video $news)
    {
        $seo['title'] = 'Видео';
        
        $videos = $this->videoRepository->get();

        return view('site.videos')->with(compact('videos', 'seo'));
    }

}
