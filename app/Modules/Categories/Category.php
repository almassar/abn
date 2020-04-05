<?php

namespace App\Modules\Categories;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Класс категории Nested Set
 * @property int $id
 * @property int|null $parent_id
 * @property int|null $left_key
 * @property int|null $right_key
 * @property int $level
 * @property string|null $name
 * @property string|null $slug
 * @property int $amount
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|Category[] $children
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Categories\Category whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Categories\Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Categories\Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Categories\Category whereLeftKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Categories\Category whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Categories\Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Categories\Category whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Categories\Category whereRightKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Categories\Category whereUpdatedAt($value)
 * @mixin \Eloquent
 */

abstract class Category extends Model
{
    protected $fillable = ['name', 'parent_id', 'level'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Возвращает только прямые потомки
    */
    public function children()
    {
        return $this->hasMany(static::class, 'parent_id')->orderBy('name');
    }

    /**
     * Возвращает все элементы без потомков (листья)
    */
    public static function allLeaves(): Collection
    {
        return static::whereRaw('right_key - left_key = 1')->get();
    }

    /**
     * Есть ли у элемента потомомк
     * @return boolean
    */
    public function isLeaf(): bool
    {
        return ($this->right_key - $this->left_key) === 1;
    }

    /**
     * Возвращает все родительские узлы и сам узел
     * @return Category[]|Collection
     */
    public function getAncestorsAndSelf()
    {
        return static::where([['left_key', '<=', $this->left_key], ['right_key', '>=', $this->right_key]])->get();
    }

    /**
     * Возвращает потомков
     * @return Category[]|Collection
     */
    public function getDescendants()
    {
        return static::where([['left_key', '>', $this->left_key], ['right_key', '<', $this->right_key]])->get();
    }

    /**
     * Возвращает потомков и сам узел
     * @return Category[]|Collection
     */
    public function getDescendantsAndSelf()
    {
        return static::where([['left_key', '>=', $this->left_key], ['right_key', '<=', $this->right_key]])->get();
    }

    public static function buildTree(array $items = [], $parentId = null, $level = 0)
    {
        foreach ($items as $key => $item)
        {
            $node = static::create(['name' => $item['name'], 'parent_id' => $parentId, 'level' => $level]);

            if (isset($item['children'])) {
                static::buildTree($item['children'], $node->id, $level + 1);
            }
        }
    }


}
