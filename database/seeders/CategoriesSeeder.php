<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();
        DB::table('categories')->insert([
            [
                'name' => 'Кухни',
                'slug' => 'kuhni',
                'key' => 'kitchen',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Шкафы и прихожие',
                'slug' => 'shkafy-prihozhie',
                'key' => 'hall',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Офисная и торговая мебель',
                'slug' => 'ofisnaya-torgovaya-mebel',
                'key' => 'commercial',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Гардеробы и тумбы',
                'slug' => 'garderoby-tumby',
                'key' => 'wardrobe',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Детская мебель',
                'slug' => 'detskaya-mebel',
                'key' => 'children',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
