<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::insert([
            [
            'name' => 'Danh mục sản phẩm',
            'display_name' => 'Danh mục sản phẩm',
            'parent_id' => '0',
            'key_code' => ''
            ],
            [
                'name' => 'Danh sách danh mục',
                'display_name' => 'Danh sách danh mục',
                'parent_id' => '1',
                'key_code' => 'list_category'
            ],
            [
                'name' => 'Thêm danh mục',
                'display_name' => 'Thêm danh mục',
                'parent_id' => '1',
                'key_code' => 'add_category'
            ],
            [
                'name' => 'Sửa danh mục',
                'display_name' => 'Sửa danh mục',
                'parent_id' => '1',
                'key_code' => 'edit_category'
            ],
            [
                'name' => 'Xóa danh mục',
                'display_name' => 'Xóa danh mục',
                'parent_id' => '1',
                'key_code' => 'delete_category'
            ],
            [
                'name' => 'Menu',
                'display_name' => 'Menu',
                'parent_id' => '0',
                'key_code' => ''
            ],
            [
                'name' => 'Danh sách Menu',
                'display_name' => 'Danh sách Menu',
                'parent_id' => '6',
                'key_code' => 'list_menu'
            ],
            [
                'name' => 'Thêm Menu',
                'display_name' => 'Thêm Menu',
                'parent_id' => '6',
                'key_code' => 'add_menu'
            ],
            [
                'name' => 'Sửa Menu',
                'display_name' => 'Sửa Menu',
                'parent_id' => '6',
                'key_code' => 'edit_menu'
            ],
            [
                'name' => 'Xóa Menu',
                'display_name' => 'Xóa Menu',
                'parent_id' => '6',
                'key_code' => 'delete_menu'
            ],
            [
                'name' => 'Slider',
                'display_name' => 'Slider',
                'parent_id' => '0',
                'key_code' => ''
            ],
            [
                'name' => 'Danh mục Slider',
                'display_name' => 'Danh mục Slider',
                'parent_id' => '11',
                'key_code' => 'list_slider'
            ],
            [
                'name' => 'Thêm Slider',
                'display_name' => 'Thêm Slider',
                'parent_id' => '11',
                'key_code' => 'add_slider'
            ],
            [
                'name' => 'Sửa Slider',
                'display_name' => 'Sửa Slider',
                'parent_id' => '11',
                'key_code' => 'edit_slider'
            ],
            [
                'name' => 'Xóa Slider',
                'display_name' => 'Xóa Slider',
                'parent_id' => '11',
                'key_code' => 'delete_slider'
            ],
            [
                'name' => 'Sản Phẩm',
                'display_name' => 'Sản Phẩm',
                'parent_id' => '0',
                'key_code' => ''
            ],
            [
                'name' => 'Danh mục sản phẩm',
                'display_name' => 'Danh mục sản phẩm',
                'parent_id' => '16',
                'key_code' => 'list_product'
            ],
            [
                'name' => 'Thêm sản phẩm',
                'display_name' => 'Thêm sản phẩm',
                'parent_id' => '16',
                'key_code' => 'add_product'
            ],
            [
                'name' => 'Sửa sản phẩm',
                'display_name' => 'Sửa sản phẩm',
                'parent_id' => '16',
                'key_code' => 'edit_product'
            ],
            [
                'name' => 'Xóa sản phẩm',
                'display_name' => 'Xóa sản phẩm',
                'parent_id' => '16',
                'key_code' => 'delete_product'
            ],
            [
                'name' => 'Setting',
                'display_name' => 'Setting',
                'parent_id' => '0',
                'key_code' => ''
            ],
            [
                'name' => 'Danh mục Setting',
                'display_name' => 'Danh mục Setting',
                'parent_id' => '21',
                'key_code' => 'list_setting'
            ],
            [
                'name' => 'Thêm Setting',
                'display_name' => 'Thêm Setting',
                'parent_id' => '21',
                'key_code' => 'add_setting'
            ],
            [
                'name' => 'Sửa Setting',
                'display_name' => 'Sửa Setting',
                'parent_id' => '21',
                'key_code' => 'edit_setting'
            ],
            [
                'name' => 'Xóa Setting',
                'display_name' => 'Xóa Setting',
                'parent_id' => '21',
                'key_code' => 'delete_setting'
            ],
            [
                'name' => 'User',
                'display_name' => 'User',
                'parent_id' => '0',
                'key_code' => ''
            ],
            [
                'name' => 'Danh sách User',
                'display_name' => 'Danh sách User',
                'parent_id' => '26',
                'key_code' => 'list_user'
            ],
            [
                'name' => 'Thêm User',
                'display_name' => 'Thêm User',
                'parent_id' => '26',
                'key_code' => 'add_user'
            ],
            [
                'name' => 'Sửa User',
                'display_name' => 'Sửa User',
                'parent_id' => '26',
                'key_code' => 'edit_user'
            ],
            [
                'name' => 'Xóa User',
                'display_name' => 'Xóa User',
                'parent_id' => '26',
                'key_code' => 'delete_user'
            ],
            [
                'name' => 'Role',
                'display_name' => 'Role',
                'parent_id' => '0',
                'key_code' => ''
            ],
            [
                'name' => 'Danh sách Role',
                'display_name' => 'Danh sách Role',
                'parent_id' => '31',
                'key_code' => 'list_role'
            ],
            [
                'name' => 'Thêm Role',
                'display_name' => 'Thêm Role',
                'parent_id' => '31',
                'key_code' => 'add_role'
            ],
            [
                'name' => 'Sửa Role',
                'display_name' => 'Sửa Role',
                'parent_id' => '31',
                'key_code' => 'edit_role'
            ],
            [
                'name' => 'Xóa Role',
                'display_name' => 'Xóa Role',
                'parent_id' => '31',
                'key_code' => 'delete_role'
            ]
        ]);
    }
}
