<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    /**
     * @return HasMany
     */
    public function projects()
    {
        return $this->hasMany(CategoryProject::class);
    }

    /**
     * @param string $slug
     * @return array
     */
    public static function getProjectByCategory(string $slug): array
    {
        return self::where(['slug' => $slug])->first()->projects;
    }
}
