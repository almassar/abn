<?php

namespace App\Http\Controllers\Admin;

use App\Modules\Articles\Article;
use App\Modules\Articles\ArticleRepository;
use App\Modules\Flash\Facades\Flash;
use App\Modules\Tags\TagRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    private $articleRepository;
    private $tagRepository;

    public function __construct(ArticleRepository $articleRepository, TagRepository $tagRepository)
    {
        $this->articleRepository = $articleRepository;
        $this->tagRepository     = $tagRepository;
    }

    public function index()
    {
        $seo['title'] = 'Статьи задачи';
        $articles = $this->articleRepository->orderBy('id', 'desc')->paginate();

        return view('admin.articles.index')->with(['seo' => $seo, 'articles' => $articles]);
    }

    public function form(Article $article = null)
    {
        $seo['title'] = ($article === null ?  'Добавление' : 'Редактирование').' статьи';

        $tags = $this->tagRepository->orderBy('name')->all();

        return view('admin.articles.form')->with(['article' => $article, 'tags' => $tags, 'seo' => $seo]);
    }

    public function save(Request $request, Article $article = null)
    {
        $data = $request->all() + ['slug' => Str::slug($request->input('name')), 'creater_id' => Auth::user()->id];

        $errors = $this->articleRepository->validate($data);

        if ($errors)




        $article = $this->articleRepository->save($data, $article);
        $article->tags()->sync($request->input('tags'));

        if ($request->has('image')) {
            $request->image->storeAs('images', $article->id.'.jpg');
        }

        Flash::success('Сатья успешно сохранена!');
        return redirect('admin/articles');
    }

    public function delete(Article $article)
    {
        $this->articleRepository->delete($article->id);

        Flash::success('Статья успешно удалена!');
        return redirect('admin/articles');
    }


}
