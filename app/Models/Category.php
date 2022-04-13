<?php

namespace App\Models;

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
 * @mixin \Eloquent
 */
class Category extends Model
{
    use HasFactory;

    public const CATEGORY_KITCHEN = 'kuhni';
    public const CATEGORY_HALL = 'shkafy-prihozhie';
    public const CATEGORY_COMMERCIAL = 'ofisnaya-torgovaya-mebel';
    public const CATEGORY_WARDROBE = 'garderoby-tumby';
    public const CATEGORY_CHILDREN = 'detskaya-mebel';

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
     * @param string $slug
     * @return Collection
     */
    public static function getProjectByCategoryWithSlug(string $slug): Collection
    {
        $category = self::where(['slug' => $slug])->first();

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
    public static function getRouteBySlug(string $slug): string
    {
        switch ($slug) {
            case Category::CATEGORY_KITCHEN:
                return 'kitchen';
            case Category::CATEGORY_HALL:
                return 'hall';
            case Category::CATEGORY_WARDROBE:
                return 'wardrobe';
            case Category::CATEGORY_COMMERCIAL:
                return 'commercial';
            case Category::CATEGORY_CHILDREN:
                return 'children';
            default:
                throw new \InvalidArgumentException();
        }
    }

    /**
     * @param string $route
     * @return string
     */
    public static function getSlugByRoute(string $route): string
    {
        switch ($route) {
            case 'kitchen':
                return Category::CATEGORY_KITCHEN;
            case 'hall':
                return Category::CATEGORY_HALL;
            case 'wardrobe':
                return Category::CATEGORY_WARDROBE;
            case 'commercial':
                return Category::CATEGORY_COMMERCIAL;
            case 'children':
                return Category::CATEGORY_CHILDREN;
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
