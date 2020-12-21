<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{


    public function index()
    {
        $seo['title'] = 'Главная';

        return view('admin.dashboard')->with(['seo' => $seo]);
    }


}
