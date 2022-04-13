<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

/**
 * App\Models\CategoryProject
 *
 * @property int $id
 * @property int $category_id
 * @property string|null $name
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $meta_title
 * @property string|null $meta_keywords
 * @property string|null $meta_description
 * @property string|null $slug
 * @property-read \App\Models\Category|null $category
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryProject newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryProject newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryProject query()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryProject whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryProject whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryProject whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryProject whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryProject whereMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryProject whereMetaKeywords($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryProject whereMetaTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryProject whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryProject whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryProject whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class CategoryProject extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    /**
     * @return HasOne
     */
    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    /**
     * @param int $id
     * @return array
     */
    public static function getFormattedProject(string $projectSlug): array
    {
        $project = self::where('slug', '=', $projectSlug)->firstOrFail();

        $formatted['info'] = $project;
        $formatted['primaryImage'] = $project->getMedia('primaryImage')[0];
        $formatted['backgroundImage'] = $project->getMedia('backgroundImage')[0];

        $secondaryMedia = array_map(function ($key) use ($project) {
            try {
                return $project->getMedia("image{$key}")[0];
            } catch (\ErrorException $e) {
                return null;
            }
        }, range(1, 10));
        $formatted['secondaryImages'] = array_filter($secondaryMedia);

        return $formatted;
    }
}
