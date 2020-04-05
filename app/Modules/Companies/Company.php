<?php

namespace App\Modules\Companies;

use App\Modules\Categories\Category;
use App\Modules\Cities\City;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

/**
 * App\Modules\Companies\Company
 *
 * @property int $id
 * @property int $key
 * @property string $name
 * @property string $city_id
 * @property string $address
 * @property float $lat
 * @property float $long
 * @property string $email
 * @property string $phone
 * @property string $site
 * @property string $vk
 * @property string $facebook
 * @property string $instagram
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Modules\Categories\Category[] $categories
 * @property-read int|null $categories_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Companies\Company newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Companies\Company newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Companies\Company query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Companies\Company whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Companies\Company whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Companies\Company whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Companies\Company whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Companies\Company whereFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Companies\Company whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Companies\Company whereInstagram($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Companies\Company whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Companies\Company whereLat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Companies\Company whereLong($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Companies\Company whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Companies\Company wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Companies\Company whereSite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Companies\Company whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Companies\Company whereVk($value)
 * @mixin \Eloquent
 */
class Company extends Model
{
    use Notifiable;
    protected $guarded = [];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'company_category_pivot');
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
