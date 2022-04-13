<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\MetaData
 *
 * @property int $id
 * @property string $category_slug
 * @property string|null $title
 * @property string|null $keywords
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|MetaData newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MetaData newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MetaData query()
 * @method static \Illuminate\Database\Eloquent\Builder|MetaData whereCategorySlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MetaData whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MetaData whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MetaData whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MetaData whereKeywords($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MetaData whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MetaData whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class MetaData extends Model
{
    use HasFactory;

    /**
     * @param string $categorySlug
     * @return mixed
     */
    public static function getBySlug(string $categorySlug)
    {
        return self::where(['category_slug' => $categorySlug])->first();
    }

    /**
     * @param string $categorySlug
     * @return array
     */
    public static function getForCategoryPageBySlug(string $categorySlug): array
    {
        $res = self::select(['title', 'keywords', 'description'])
            ->where(['category_slug' => $categorySlug])
            ->first();

        return $res ? $res->toArray() : [];

    }

    /**
     * @param string $slug
     * @return array
     */
    public static function getForProjectById(string $slug): array
    {
        return CategoryProject::select(['meta_title AS title', 'meta_keywords AS keywords', 'meta_description AS description'])
            ->where(['slug' => $slug])
            ->first()
            ->toArray();
    }
}
