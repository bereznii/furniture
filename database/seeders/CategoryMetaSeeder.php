<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryMetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('meta_data')->truncate();
        DB::table('meta_data')->insert([
            [
                'category_slug' => 'kitchen',
                'title' => 'Мебельный мастер | Кухни',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'category_slug' => 'hall',
                'title' => 'Мебельный мастер | Шкафа и прихожие',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'category_slug' => 'commercial',
                'title' => 'Мебельный мастер | Офисная и торговая мебель',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'category_slug' => 'wardrobe',
                'title' => 'Мебельный мастер | Гардеробы и тумбы',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'category_slug' => 'children',
                'title' => 'Мебельный мастер | Детская мебель',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
