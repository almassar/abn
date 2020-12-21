<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Modules\Flash\Facades\Flash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Modules\Partners\Partner;
use App\Modules\Partners\PartnerRepository;

class PartnerController extends Controller
{
    private $partnerRepository;

    public function __construct(PartnerRepository $partnerRepository)
    {
        $this->partnerRepository  = $partnerRepository;
    }

    public function index()
    {
        $seo['title'] = 'Партнеры';
        $partners = $this->partnerRepository->get();

        return view('admin.partners.index')->with(['seo' => $seo, 'partners' => $partners]);
    }

    public function form(Partner $partner = null)
    {
        $seo['title'] = ($partner === null ?  'Добавление' : 'Редактирование').' партнера';
        return view('admin.partners.form')->with(['partner' => $partner, 'seo' => $seo]);
    }

    public function save(Request $request, Partner $partner = null)
    {
        $data = $request->all();

        $partner = $this->partnerRepository->save($data, $partner);

        if ($request->has('image')) {
            $request->image->storeAs('public/partners', $partner->id.'.jpg');
        }

        Flash::success('Партнер успешно сохранена!');
        return redirect('admin/partners');
    }

    public function delete(Partner $partner)
    {
        $this->partnerRepository->delete($partner->id);

        Flash::success('Партнер успешно удалена!');
        return redirect('admin/partners');
    }
}
