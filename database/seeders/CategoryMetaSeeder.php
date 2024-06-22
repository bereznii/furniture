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
                'category_slug' => 'kuhni',
                'title' => 'Меблевий майстер | Кухні',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'category_slug' => 'shkafy-prihozhie',
                'title' => 'Меблевий майстер | Шафи та передпокій',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'category_slug' => 'ofisnaya-torgovaya-mebel',
                'title' => 'Меблевий майстер | Офісні та торгові меблі',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'category_slug' => 'garderoby-tumby',
                'title' => 'Меблевий майстер | Гардероби та тумби',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'category_slug' => 'detskaya-mebel',
                'title' => 'Меблевий майстер | Дитячі меблі',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
