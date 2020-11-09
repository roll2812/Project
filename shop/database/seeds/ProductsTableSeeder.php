<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::insert([
            [
                'name' => 'Cute Pug Dog Vintage',
                'price' => '180000',
                'feature_image_path' => '/storage/product/1/H8NzqrYoZmZkxm2O5F4h.jpg',
                'content' => '<p>Shirt for lovers dog</p>',
                'user_id' => '1',
                'category_id' => '2',
                'feature_image_name' => '2cba577fda2b1209a1ce145aaadca117.jpg',
                'views_count' => rand(0,100)

            ],
            [
                'name' => 'Funny Pug Cool Pugs',
                'price' => '180000',
                'feature_image_path' => '/storage/product/1/SszQlLkEWTZeNfdaLtS5.jpg',
                'content' => '<h1 class="h__h1--sm" title="Funny Pug Cool Pugs Dog Mom Dad Pet Lover - Pug - T-Shirt">Funny Pug Cool Pugs Dog Mom Dad Pet Lover T-Shirt</h1>',
                'user_id' => '1',
                'category_id' => '2',
                'feature_image_name' => '12912599_0.jpg',
                'views_count' => rand(0,100)

            ],
            [
                'name' => 'Funny Space Pug Dog Pizza',
                'price' => '180000',
                'feature_image_path' => '/storage/product/1/NkDw1PLj4TjY1HXO0iXQ.jpg',
                'content' => '<h1 class="h__h1--sm" title="Funny Space Pug Dog With Pizza - Funny Space Pug Dog With Pizza - T-Shirt">Funny Space Pug Dog With Pizza T-Shirt</h1>',
                'user_id' => '1',
                'category_id' => '2',
                'feature_image_name' => '11890959_0.jpg',
                'views_count' => rand(0,100)

            ],
            [
                'name' => 'Cool Pug In Glasses T-Shirt',
                'price' => '180000',
                'feature_image_path' => '/storage/product/1/qZe05IbnydaBrVso2Mkg.jpg',
                'content' => '<h1 class="h__h1--sm" title="Cool Pug In Glasses - Pug Dog Funny - T-Shirt">Cool Pug In Glasses T-Shirt</h1>',
                'user_id' => '1',
                'category_id' => '2',
                'feature_image_name' => '6249010_0.jpg',
                'views_count' => rand(0,100)

            ],
            [
                'name' => 'Pug Guilty As Charged T-Shirt',
                'price' => '180000',
                'feature_image_path' => '/storage/product/1/VqzvUyYdyRZ2xi2uTr0W.jpg',
                'content' => '<h1 class="h__h1--sm" title="Pug Guilty As Charged - Pug Dog Funny - T-Shirt">Pug Guilty As Charged T-Shirt</h1>',
                'user_id' => '1',
                'category_id' => '2',
                'feature_image_name' => '12902692_0.jpg',
                'views_count' => rand(0,100)

            ],
            [
                'name' => 'Be Kind Pug said ! T-Shirt',
                'price' => '180000',
                'feature_image_path' => '/storage/product/1/QU7GaNtKCwYZ1VWAcmWt.jpg',
                'content' => '<h1 class="h__h1--sm" title="Be Kind Pug said ! - Pug Dog Funny - T-Shirt">Be Kind Pug said ! T-Shirt</h1>',
                'user_id' => '1',
                'category_id' => '2',
                'feature_image_name' => '11526324_0.jpg',
                'views_count' => rand(0,100)

            ],
            [
                'name' => 'Jolly corgies T-Shirt',
                'price' => '160000',
                'feature_image_path' => '/storage/product/1/t8tiLB8uFsZUaE1XMckW.jpg',
                'content' => '<h1 class="h__h1--sm" title="Jolly corgies - Corgi - T-Shirt">Jolly corgies T-Shirt</h1>',
                'user_id' => '1',
                'category_id' => '1',
                'feature_image_name' => '1164885_1.jpg',
                'views_count' => rand(0,100)

            ],
            [
                'name' => 'Tri Color Corgi Night T-Shirt',
                'price' => '160000',
                'feature_image_path' => '/storage/product/1/pmXqYQIUC3d5zdobmYxP.jpg',
                'content' => '<h1 class="h__h1--sm" title="Tri Color Corgi Night - Corgi - T-Shirt">Tri Color Corgi Night T-Shirt</h1>',
                'user_id' => '1',
                'category_id' => '1',
                'feature_image_name' => '7397889_0.jpg',
                'views_count' => rand(0,100)

            ],
            [
                'name' => 'Corgi Japanese Ramen T-Shirt',
                'price' => '160000',
                'feature_image_path' => '/storage/product/1/5GdHplLLszn7CinBVT2L.jpg',
                'content' => '<h1 class="h__h1--sm" title="Corgi Japanese Ramen - Corgi - T-Shirt">Corgi Japanese Ramen T-Shirt</h1>',
                'user_id' => '1',
                'category_id' => '1',
                'feature_image_name' => '3552914_0.jpg',
                'views_count' => rand(0,100)

            ],
            [
                'name' => 'Vintage 1970s Corgi Dog Owner',
                'price' => '160000',
                'feature_image_path' => '/storage/product/1/fZJq2QfvtlOKQVeCGuek.jpg',
                'content' => '<h1 class="h__h1--sm" title="Vintage 1970s Corgi Dog Owner Gift - Corgi - T-Shirt">Vintage 1970s Corgi Dog Owner Gift T-Shirt</h1>',
                'user_id' => '1',
                'category_id' => '1',
                'feature_image_name' => '2707025_0.jpg',
                'views_count' => rand(0,100)

            ],
            [
                'name' => 'Vintage 1970s Corgi Dog',
                'price' => '160000',
                'feature_image_path' => '/storage/product/1/ZaUnvTSP5LPMs9d8kUZ4.jpg',
                'content' => '<h1 class="h__h1--sm" title="Vintage 1970s Corgi Dog Owner Gift - Corgi - T-Shirt">Vintage 1970s Corgi Dog Owner Gift T-Shirt</h1>',
                'user_id' => '1',
                'category_id' => '1',
                'feature_image_name' => '2707025_0.jpg',
                'views_count' => rand(0,100)

            ]
        ]);
    }
}
