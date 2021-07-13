<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

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
    public static function getFormattedProject(int $id): array
    {
        $project = self::find($id);

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
