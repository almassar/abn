<?php

namespace App\Modules\Documents;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Modules\Document\Document
 *
 * @property int $id
 * @property string $model_type
 * @property int $model_id
 * @property string|null $extension
 * @property int $size
 * @property int $sorting
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Documents\Document whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Documents\Document whereExtension($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Documents\Document whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Documents\Document whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Documents\Document whereModelType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Documents\Document whereSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Documents\Document whereSorting($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Documents\Document whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Documents\Document newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Documents\Document newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Documents\Document query()
 */

#todo Подумать foreign key
#todo при удаление слайда не удаляется document
class Document extends Model
{
    protected $fillable = ['model_type', 'model_id', 'size', 'extension', 'sorting'];
}