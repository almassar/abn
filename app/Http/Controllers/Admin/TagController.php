<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Modules\Flash\Facades\Flash;
use App\Modules\Tags\Tag;
use App\Modules\Tags\TagRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class TagController extends Controller
{
    private $tagRepository;

    public function __construct(TagRepository $tagRepository)
    {
        $this->tagRepository  = $tagRepository;
    }

    public function index()
    {
        $seo['title'] = 'Тэги задачи';
        $tags = $this->tagRepository->orderBy('name')->all();

        return view('admin.tags.index')->with(['seo' => $seo, 'tags' => $tags]);
    }

    public function form(Tag $tag = null)
    {
        $seo['title'] = ($tag === null ?  'Добавление' : 'Редактирование').' тэга';
        return view('admin.tags.form')->with(['tag' => $tag, 'seo' => $seo]);
    }

    public function save(Request $request, Tag $tag = null)
    {
        $data = array_merge($request->all(), ['creater_id' => Auth::user()->id, 'slug' => Str::slug($request->input('name'))]);

        $this->tagRepository->save($data, $tag);

        Flash::success('Тэг успешно сохранена!');
        return redirect('admin/tags');
    }

    public function delete(Tag $tag)
    {
        $this->tagRepository->delete($tag->id);

        Flash::success('Тэг успешно удалена!');
        return redirect('admin/tags');
    }
}
