<?php

use App\Menu;
use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::insert([
            [
                'name' => 'Menu 1',
                'parent_id' => '0',
                'slug' => Str::slug('Menu 1', '-')
            ],
            [
                'name' => 'Menu 2',
                'parent_id' => '0',
                'slug' => Str::slug('Menu 2', '-')
            ],
            [
                'name' => 'Menu 3',
                'parent_id' => '0',
                'slug' => Str::slug('Menu 3', '-')
            ],
            [
                'name' => 'Menu 1.1',
                'parent_id' => '1',
                'slug' => Str::slug('Menu 1.1', '-')
            ],
            [
                'name' => 'Menu 1.2',
                'parent_id' => '1',
                'slug' => Str::slug('Menu 1.2', '-')
            ],
            [
                'name' => 'Menu 1.1.1',
                'parent_id' => '4',
                'slug' => Str::slug('Menu 1.1.1', '-')
            ],
            [
                'name' => 'Menu 1.2.1',
                'parent_id' => '5',
                'slug' => Str::slug('Menu 1.2.1', '-')
            ],
            [
                'name' => 'Menu 2.1',
                'parent_id' => '2',
                'slug' => Str::slug('Menu 2.1', '-')
            ],
        ]);
    }
}
