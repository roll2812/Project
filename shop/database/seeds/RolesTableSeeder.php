<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::insert([
            ['name' => 'Admin', 'display_name' => 'Administrator'],
            ['name' => 'Staff', 'display_name' => 'Staff'],
            ['name' => 'Developer', 'display_name' => 'Developer'],
            ['name' => 'Content', 'display_name' => 'Content Editor'],
        ]);
    }
}
