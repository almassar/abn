<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Modules\Flash\Facades\Flash;
use Illuminate\Http\Request;
use App\Modules\Videos\Video;
use App\Modules\Videos\VideoRepository;

class VideoController extends Controller
{
    private $videoRepository;

    public function __construct(VideoRepository $videoRepository)
    {
        $this->videoRepository  = $videoRepository;
    }

    public function index()
    {
        $seo['title'] = 'Видео';
        $videos = $this->videoRepository->get();

        return view('admin.videos.index')->with(['seo' => $seo, 'videos' => $videos]);
    }

    public function form(Video $video = null)
    {
        $seo['title'] = ($video === null ?  'Добавление' : 'Редактирование').' видео';
        return view('admin.videos.form')->with(['video' => $video, 'seo' => $seo]);
    }

    public function save(Request $request, Video $video = null)
    {
        $data = $request->all();

        $video = $this->videoRepository->save($data, $video);

        if ($request->has('image')) {
            $request->image->storeAs('public/videos', $video->id.'.jpg');
        }

        Flash::success('Видео успешно сохранена!');
        return redirect('admin/videos');
    }

    public function delete(Video $video)
    {
        $this->videoRepository->delete($video->id);

        Flash::success('Видео успешно удалена!');
        return redirect('admin/videos');
    }
}
