<?php

use App\Slider;
use Illuminate\Database\Seeder;

class SlidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Slider::insert([
            [
                'name' => 'dog',
                'description' => 'Dog',
                'image_path' => '/storage/slider/1/AF6QSGonSlI7B1kuZK1x.jpg',
                'image_name' => 'elena-mozhvilo-lfeSPLBxcKU-unsplash.jpg'
            ],
            [
                'name' => 'dog 1',
                'description' => 'dog 1',
                'image_path' => '/storage/slider/1/9mqSR64PhqTZHlVg1Ozq.jpg',
                'image_name' => 'karsten-winegeart-5PVXkqt2s9k-unsplash.jpg'
            ],
            [
                'name' => 'dog 2',
                'description' => 'dog 2',
                'image_path' => '/storage/slider/1/TUle4KOgdGAZs9oOd4f7.jpg',
                'image_name' => 'charles-deluvio-K4mSJ7kc0As-unsplash.jpg'
            ]
        ]);
    }
}
