<?php

namespace App\Modules\News;

use App\Modules\Repositories\Repository;

class NewsRepository extends Repository
{
    public function model()
	{
		return News::class;
	}

}