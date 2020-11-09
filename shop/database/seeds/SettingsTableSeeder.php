<?php

use App\Setting;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::insert([
            [
                'config_key' => 'phone_number',
                'config_value' => '+84 077 219 0059',
                'type' => 'text'
            ],
            [
                'config_key' => 'email',
                'config_value' => 'peppashirt@gmail.com',
                'type' => 'text'
            ],
            [
                'config_key' => 'footer_information',
                'config_value' => '<p class="pull-left">Copyright © 2020 PEPPA SHIRT  Inc. All rights reserved.</p> 					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.peppashirt.com">peppashirt.com</a></span></p>',
                'type' => 'text'
            ]
        ]);
    }
}
