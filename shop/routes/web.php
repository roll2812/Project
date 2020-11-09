<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/home', function () {
    return view('home');
})->name('home');
Route::get('/admin', 'AdminController@loginAdmin');
Route::post('/admin', 'AdminController@postLoginAdmin');
Route::get('/logout', 'AdminController@logoutAdmin')->name('admin.logout');

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
Route::prefix('admin')->group(function () {

    Route::prefix('categories')->group(function () {
        Route::get('/create', [
            'as' => 'categories.create',
            'uses' => 'CategoryController@create',
            'middleware' => 'can:category-create'
        ]);
        Route::get('/', [
            'as' => 'categories.index',
            'uses' => 'CategoryController@index',
            'middleware' => 'can:category-list'
        ]);
        Route::post('/store', [
            'as' => 'categories.store',
            'uses' => 'CategoryController@store',

        ]);
        Route::get('/edit/{id}', [
            'as' => 'categories.edit',
            'uses' => 'CategoryController@edit',
            'middleware' => 'can:category-edit'
        ]);
        Route::get('/delete/{category}', [
            'as' => 'categories.delete',
            'uses' => 'CategoryController@destroy',
            'middleware' => 'can:category-delete'
        ]);
        Route::put('/update/{id}', [
            'as' => 'categories.update',
            'uses' => 'CategoryController@update',

        ]);
    });

    //Menu Routes
    Route::prefix('menus')->group(function () {
        Route::get('/', [
            'as' => 'menus.index',
            'uses' => 'MenuController@index',
            'middleware' => 'can:menu-list'
        ]);
        Route::get('/create', [
            'as' => 'menus.create',
            'uses' => 'MenuController@create',
            'middleware' => 'can:menu-create'
        ]);
        Route::post('/store', [
            'as' => 'menus.store',
            'uses' => 'MenuController@store',
        ]);
        Route::get('/edit/{menu}', [
            'as' => 'menus.edit',
            'uses' => 'MenuController@edit',
            'middleware' => 'can:menu-edit'
        ]);
        Route::put('/update/{menu}', [
            'as' => 'menus.update',
            'uses' => 'MenuController@update',
        ]);
        Route::get('/delete/{menu}', [
            'as' => 'menus.delete',
            'uses' => 'MenuController@destroy',
            'middleware' => 'can:menu-delete'
        ]);
    });

    //Products Routes
    Route::prefix('product')->group(function () {
        Route::get('/', [
            'as' => 'product.index',
            'uses' => 'AdminProductController@index',
            'middleware' => 'can:product-list'
        ]);
        Route::get('/create', [
            'as' => 'product.create',
            'uses' => 'AdminProductController@create',
            'middleware' => 'can:product-create'
        ]);
        Route::post('/store', [
            'as' => 'product.store',
            'uses' => 'AdminProductController@store',
        ]);
        Route::get('/edit/{product}', [
            'as' => 'product.edit',
            'uses' => 'AdminProductController@edit',
            'middleware' => 'can:product-edit'
        ]);
        Route::post('/update/{product}', [
            'as' => 'product.update',
            'uses' => 'AdminProductController@update'
        ]);
        Route::get('/delete/{product}', [
            'as' => 'product.delete',
            'uses' => 'AdminProductController@delete',
            'middleware' => 'can:product-delete'
        ]);
    });

    // Slider Routes

    Route::prefix('slider')->group(function () {
        Route::get('/', [
            'as' => 'slider.index',
            'uses' => 'SliderAdminController@index',
            'middleware' => 'can:slider-list'
        ]);
        Route::get('/create', [
            'as' => 'slider.create',
            'uses' => 'SliderAdminController@create',
            'middleware' => 'can:slider-create'
        ]);
        Route::post('/store', [
            'as' => 'slider.store',
            'uses' => 'SliderAdminController@store'
        ]);
        Route::get('/edit/{slider}', [
            'as' => 'slider.edit',
            'uses' => 'SliderAdminController@edit',
            'middleware' => 'can:slider-edit'
        ]);
        Route::put('/update/{slider}', [
            'as' => 'slider.update',
            'uses' => 'SliderAdminController@update'
        ]);
        Route::get('/delete/{slider}', [
            'as' => 'slider.delete',
            'uses' => 'SliderAdminController@delete',
            'middleware' => 'can:slider-delete'
        ]);
    });

    // Setting

    Route::prefix('setting')->group(function () {
        Route::get('/', [
            'as' => 'setting.index',
            'uses' => 'AdminSettingController@index',
            'middleware' => 'can:setting-list'
        ]);
        Route::get('/create', [
            'as' => 'setting.create',
            'uses' => 'AdminSettingController@create',
            'middleware' => 'can:setting-create'
        ]);
        Route::post('/store', [
            'as' => 'setting.store',
            'uses' => 'AdminSettingController@store'
        ]);
        Route::get('/edit/{setting}', [
            'as' => 'setting.edit',
            'uses' => 'AdminSettingController@edit',
            'middleware' => 'can:setting-edit'
        ]);
        Route::put('update/{setting}', [
            'as' => 'setting.update',
            'uses' => 'AdminSettingController@update'
        ]);
        Route::get('delete/{setting}', [
            'as' => 'setting.delete',
            'uses' => 'AdminSettingController@delete',
            'middleware' => 'can:setting-delete'
        ]);
    });

    //Users

    Route::prefix('users')->group(function () {
        Route::get('/', [
            'as' => 'users.index',
            'uses' => 'UserAdminController@index',
            'middleware' => 'can:user-list'

        ]);
        Route::get('/create', [
            'as' => 'users.create',
            'uses' => 'UserAdminController@create',
            'middleware' => 'can:user-create'
        ]);
        Route::post('/store', [
            'as' => 'users.store',
            'uses' => 'UserAdminController@store'

        ]);
        Route::get('/edit/{user}', [
            'as' => 'users.edit',
            'uses' => 'UserAdminController@edit',
            'middleware' => 'can:user-edit'
        ]);
        Route::put('/update/{user}', [
            'as' => 'users.update',
            'uses' => 'UserAdminController@update'
        ]);
        Route::get('/delete/{user}', [
            'as' => 'users.delete',
            'uses' => 'UserAdminController@delete',
            'middleware' => 'can:user-delete'
        ]);

    });

    //Permission

    Route::prefix('roles')->group(function () {
        Route::get('/', [
            'as' => 'roles.index',
            'uses' => 'AdminRoleController@index',
            'middleware' => 'can:role-list'

        ]);
        Route::get('/create', [
            'as' => 'roles.create',
            'uses' => 'AdminRoleController@create',
            'middleware' => 'can:role-create'
        ]);
        Route::post('/store', [
            'as' => 'roles.store',
            'uses' => 'AdminRoleController@store'
        ]);
        Route::get('/edit/{role}', [
            'as' => 'roles.edit',
            'uses' => 'AdminRoleController@edit',
            'middleware' => 'can:role-edit'
        ]);
        Route::put('/update/{role}', [
            'as' => 'roles.update',
            'uses' => 'AdminRoleController@update'
        ]);
        Route::get('/delete/{role}', [
            'as' =>'roles.delete',
            'uses' => 'AdminRoleController@delete',
            'middleware' => 'can:role-delete'
        ]);


    });

    //Bill Orders
    Route::prefix('orders')->group(function () {
        Route::get('/', [
            'as' => 'orders.index',
            'uses' => 'BillAdminController@index',
        ]);
        Route::get('/edit/{customer}', [
            'as' => 'orders.edit',
            'uses' => 'BillAdminController@edit',
        ]);
        Route::put('/edit/{id}', [
            'as' => 'orders.update',
            'uses' => 'BillAdminController@update',
        ]);
        Route::get('/delete/{customer}', [
            'as' => 'orders.delete',
            'uses' => 'BillAdminController@delete',
        ]);
    });
});
