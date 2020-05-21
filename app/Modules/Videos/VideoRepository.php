<?php

namespace App\Modules\Videos;

use App\Modules\Repositories\Repository;

class VideoRepository extends Repository
{
	public function model()
	{
		return Video::class;
	}

}