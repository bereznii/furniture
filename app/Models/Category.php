<?php

namespace App\Models;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Category
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Collection|\App\Models\CategoryProject[] $projects
 * @property-read int|null $projects_count
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Category extends Model
{
    use HasFactory;

    public const CATEGORY_KITCHEN_SLUG = 'kuhni';
    public const CATEGORY_HALL_SLUG = 'shkafy-prihozhie';
    public const CATEGORY_COMMERCIAL_SLUG = 'ofisnaya-torgovaya-mebel';
    public const CATEGORY_WARDROBE_SLUG = 'garderoby-tumby';
    public const CATEGORY_CHILDREN_SLUG = 'detskaya-mebel';

    public const CATEGORY_KITCHEN_KEY = 'kitchen';
    public const CATEGORY_HALL_KEY = 'hall';
    public const CATEGORY_COMMERCIAL_KEY = 'commercial';
    public const CATEGORY_WARDROBE_KEY = 'wardrobe';
    public const CATEGORY_CHILDREN_KEY = 'children';

    /**
     * @return HasMany
     */
    public function projects()
    {
        return $this->hasMany(CategoryProject::class);
    }

    /**
     * @param string $slug
     * @return Collection
     */
    public static function getProjectByCategory(string $slug): Collection
    {
        return self::where(['slug' => $slug])->first()->projects->sortByDesc('created_at');
    }

    /**
     * @param string $categoryKey
     * @return Collection
     */
    public static function getProjectsWithSlugByCategoryKey(string $categoryKey): Collection
    {
        $category = self::where(['key' => $categoryKey])->first();

        if (!isset($category)) {
            return new Collection();
        }

        return CategoryProject::where('category_id', '=', $category->id)
            ->whereNotNull('slug')
            ->orderBy('created_at', 'desc')
            ->get();
    }

    /**
     * @param string $slug
     * @return string
     */
    public static function getNameBySlug(string $slug): string
    {
        return self::where(['slug' => $slug])->first()->name;
    }

    /**
     * @param string $slug
     * @return string
     */
    public static function getKeyBySlug(string $slug): string
    {
        switch ($slug) {
            case Category::CATEGORY_KITCHEN_SLUG:
                return Category::CATEGORY_KITCHEN_KEY;
            case Category::CATEGORY_HALL_SLUG:
                return Category::CATEGORY_HALL_KEY;
            case Category::CATEGORY_WARDROBE_SLUG:
                return Category::CATEGORY_WARDROBE_KEY;
            case Category::CATEGORY_COMMERCIAL_SLUG:
                return Category::CATEGORY_COMMERCIAL_KEY;
            case Category::CATEGORY_CHILDREN_SLUG:
                return Category::CATEGORY_CHILDREN_KEY;
            default:
                throw new \InvalidArgumentException();
        }
    }

    /**
     * @param string $route
     * @return string
     */
    public static function getSlugByKey(string $route): string
    {
        switch ($route) {
            case Category::CATEGORY_KITCHEN_KEY:
                return Category::CATEGORY_KITCHEN_SLUG;
            case Category::CATEGORY_HALL_KEY:
                return Category::CATEGORY_HALL_SLUG;
            case Category::CATEGORY_WARDROBE_KEY:
                return Category::CATEGORY_WARDROBE_SLUG;
            case Category::CATEGORY_COMMERCIAL_KEY:
                return Category::CATEGORY_COMMERCIAL_SLUG;
            case Category::CATEGORY_CHILDREN_KEY:
                return Category::CATEGORY_CHILDREN_SLUG;
            default:
                throw new \InvalidArgumentException();
        }
    }

    /**
     * @param string $slug
     * @return int
     */
    public static function getIdBySlug(string $slug): int
    {
        return self::where(['slug' => $slug])->first()->id;
    }
}
