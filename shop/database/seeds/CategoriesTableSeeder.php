<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            [
                'name' => 'Dogs',
                'parent_id' => 0,
                'slug' => Str::slug('dogs')

            ],
            [
                'name' => 'Pug',
                'parent_id' => 1,
                'slug' => Str::slug('pug')

            ],
            [
                'name' => 'Corgi',
                'parent_id' => 1,
                'slug' => Str::slug('corgi')

            ],
            [
                'name' => 'Siberian Husky',
                'parent_id' => 1,
                'slug' => Str::slug('Siberian Husky')

            ],
            [
                'name' => 'Outdoors',
                'parent_id' => 0,
                'slug' => Str::slug('outdoors')

            ],
            [
                'name' => 'Camping',
                'parent_id' => 5,
                'slug' => Str::slug('camping')

            ],
            [
                'name' => 'Hunting',
                'parent_id' => 5,
                'slug' => Str::slug('hunting')

            ],
            [
                'name' => 'Holidays & Events',
                'parent_id' => 0,
                'slug' => Str::slug('Holidays & Events', '-')

            ],
            [
                'name' => 'Trending',
                'parent_id' => 0,
                'slug' => Str::slug('Trending')

            ]

        ]);
    }
}
