<?php

namespace App\Modules\Videos;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

/**
 * App\Modules\Videos\Video
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Videos\Video newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Videos\Video newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Videos\Video query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Videos\Video whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Videos\Video whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Videos\Video whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Videos\Video whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Videos\Video whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $slug
 * @property-read int|null $notifications_count
 */
class Video extends Model
{
    use Notifiable;
    protected $fillable = ['name', 'player'];
}
