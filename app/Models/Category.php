<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    public const CATEGORY_KITCHEN = 'kitchen';
    public const CATEGORY_HALL = 'hall';
    public const CATEGORY_WARDROBE = 'wardrobe';
    public const CATEGORY_COMMERCIAL = 'commercial';
    public const CATEGORY_CHILDREN= 'children';

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
        return self::where(['slug' => $slug])->first()->projects;
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
     * @return int
     */
    public static function getIdBySlug(string $slug): int
    {
        return self::where(['slug' => $slug])->first()->id;
    }
}
