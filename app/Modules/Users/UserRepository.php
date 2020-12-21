<?php

namespace App\Modules\Users;

use App\Modules\Repositories\Repository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class UserRepository extends Repository
{
	private $rules = ['name'     => 'required|min:3',
	                  'email'    => 'required|email|unique:users',
                      'password' => 'required',
                      'role_id'  => 'required|integer|between:'.User::ROLE_ADMIN.', '.User::ROLE_USER];

    public function model()
	{
		return User::class;
	}

    public function validate($input)
    {
        $validator = Validator::make($input, $this->rules);

        if ($validator->fails())
            return $validator->messages()->messages();

        return null;
	}

    public function save(array $data, Model $model = null)
    {
        $data['password'] = bcrypt($data['password']);

        parent::save($data, $model);
    }
}