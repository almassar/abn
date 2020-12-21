<?php

namespace App\Modules\Users;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * App\Modules\Users\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property int $role_id
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Users\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Users\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Users\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Users\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Users\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Users\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Users\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Users\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Users\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Users\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Users\User whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Users\User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class User extends Authenticatable
{
    use Notifiable;

    const ROLE_ADMIN = 1;
    const ROLE_DEMO = 2;
    const ROLE_USER = 3;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

}
