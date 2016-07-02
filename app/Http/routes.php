<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'ShopController@index');
Route::group(['prefix' => 'shop'], function()
{
    // Controllers Within The "App\Http\Controllers\Admin" Namespace

    Route::get('/featured', ['as' => 'shop.featured','uses' =>'ShopController@featured']);
    Route::get('/product', ['as' => 'shop.products','uses' =>'ShopController@products']);
    Route::get('/categories/{category_id}/{subcategory_id?}', ['as' => 'shop.categories','uses' =>'ShopController@categories']);
    Route::get('/product/{product_id}', ['as' => 'shop.product','uses' =>'ShopController@product']);
});
