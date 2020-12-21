<?php

namespace App\Modules\Slides;

use App\Modules\Repositories\Repository;

class SlideRepository extends Repository
{
    public function model()
	{
		return Slide::class;
	}

}