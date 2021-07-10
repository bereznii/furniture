<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        return self::select(['title', 'keywords', 'description'])
            ->where(['category_slug' => $categorySlug])
            ->first()
            ->toArray();
    }

    /**
     * @param int $id
     * @return array
     */
    public static function getForProjectById(int $id): array
    {
        return CategoryProject::select(['meta_title AS title', 'meta_keywords AS keywords', 'meta_description AS description'])
            ->where(['id' => $id])
            ->first()
            ->toArray();
    }
}
