<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Modules\Flash\Facades\Flash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Modules\News\News;
use App\Modules\News\NewsRepository;

class NewsController extends Controller
{
    private $newsRepository;

    public function __construct(NewsRepository $newsRepository)
    {
        $this->newsRepository  = $newsRepository;
    }

    public function index()
    {
        $seo['title'] = 'Новости';
        $newsList = $this->newsRepository->orderBy('id', 'desc')->paginate();

        return view('admin.news.index')->with(['seo' => $seo, 'newsList' => $newsList]);
    }

    public function form(News $news = null)
    {
        $seo['title'] = ($news === null ?  'Добавление' : 'Редактирование').' новости';
        return view('admin.news.form')->with(['news' => $news, 'seo' => $seo]);
    }

    public function save(Request $request, News $news = null)
    {
        $data = $request->all();

        $news = $this->newsRepository->save($data, $news);

        if ($request->has('image')) {
            $request->image->storeAs('public/news', $news->id.'.jpg');
        }

        Flash::success('Новость успешно сохранена!');
        return redirect('admin/news');
    }

    public function delete(News $news)
    {
        $this->newsRepository->delete($news->id);

        Flash::success('Новость успешно удалена!');
        return redirect('admin/news');
    }
}
