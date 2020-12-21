<?php

namespace App\Console\Commands;

use App\Modules\Roles\RoleRepository;
use App\Modules\Users\UserRepository;
use Illuminate\Console\Command;

class CreateUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:make {name} {email} {password} {role_slug}';

    private $userRepository;
    private $roleRepository;

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create user command';

    /**
     * Create a new command instance.
     *
     * @param UserRepository $userRepository
     * @param RoleRepository $roleRepository
     */
    public function __construct(UserRepository $userRepository, RoleRepository $roleRepository)
    {
        parent::__construct();

        $this->userRepository = $userRepository;
        $this->roleRepository = $roleRepository;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $slug = $this->argument('role_slug');
        $role = $this->roleRepository->where(['slug' => $slug])->first();

        if($role == null) {
            $this->error('Введен не корректный тип пользователя!');
            return;
        }

        $attributes = ['name'     => $this->argument('name'),
                       'email'    => $this->argument('email'),
                       'password' => $this->argument('password'),
                       'role_id'  => $role->id];

        $errors = $this->userRepository->validate($attributes);

        if($errors) {
            $this->outputErrors($errors);
            return;
        }

        $this->userRepository->save($attributes);

        $this->info('Пользователь успешно добавлен!');

    }

    public function outputErrors($errors)
    {
        $this->error('Некоректные параметры команды:');

        foreach ($errors as $key => $value ){
            $this->error("{$key} - {$value[0]}");
        }


    }
}
