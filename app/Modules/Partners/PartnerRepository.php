<?php

namespace App\Modules\Partners;

use App\Modules\Repositories\Repository;

class PartnerRepository extends Repository
{
    public function model()
	{
		return Partner::class;
	}

}