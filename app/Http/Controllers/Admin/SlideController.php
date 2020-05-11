<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Modules\Flash\Facades\Flash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Modules\Slides\Slide;
use App\Modules\Slides\SlideRepository;

class SlideController extends Controller
{
    private $slideRepository;

    public function __construct(SlideRepository $slideRepository)
    {
        $this->slideRepository  = $slideRepository;
    }

    public function index()
    {
        $seo['title'] = 'Слайды';
        $slides = $this->slideRepository->get();

        return view('admin.slides.index')->with(['seo' => $seo, 'slides' => $slides]);
    }

    public function form(Slide $slide = null)
    {
        $seo['title'] = ($slide === null ?  'Добавление' : 'Редактирование').' слайда';
        return view('admin.slides.form')->with(['slide' => $slide, 'seo' => $seo]);
    }

    public function save(Request $request, Slide $slide = null)
    {
        $data = $request->all();

        $slide = $this->slideRepository->save($data, $slide);

        if ($request->has('image')) {
            $request->image->storeAs('public/slides', $slide->id.'.jpg');
        }

        Flash::success('Слайд успешно сохранена!');
        return redirect('admin/slides');
    }

    public function delete(Slide $slide)
    {
        $this->slideRepository->delete($slide->id);

        Flash::success('Слайд успешно удалена!');
        return redirect('admin/slides');
    }
}
