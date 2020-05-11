<?php

namespace App\Modules\Types;

use App\Modules\Repositories\Repository;

class TypeRepository extends Repository
{
    public function model()
	{
		return Type::class;
	}

}