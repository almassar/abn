<?php

namespace App\Modules\Views;

use App\Modules\Repositories\Repository;

class ViewRepository extends Repository
{
    public function model()
	{
		return View::class;
	}

}