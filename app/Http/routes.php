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
    Route::get('/product/{product_id}', ['middleware' => 'visited_product','as' => 'shop.product','uses' =>'ShopController@product']);
    Route::get('/wishlist/', ['as' => 'shop.wishlistshow','uses' =>'ShopController@wishlist']);
    Route::get('/addcard/{product_id}',['as' => 'shop.addcard','uses' =>'ShopController@addcard']);
    Route::get('/cart',['as' => 'shop.card','uses' =>'ShopController@cart']);


    Route::group(['prefix' => 'ajax'], function(){
        Route::post('/wishlist', ['as' => 'shop.ajax.wishlist','uses' =>'AjaxRequestController@addwishlist']);
        Route::get('/cart', ['as' => 'shop.ajax.cart','uses' =>'AjaxRequestController@showCart']);
        Route::delete('/cart/{product_id?}', ['as' => 'shop.ajax.cartdelete','uses' =>'AjaxRequestController@productDelete']);
        Route::put('/cart/{product_id?}', ['as' => 'shop.ajax.cartupdate','uses' =>'AjaxRequestController@productUpdate']);
    });

});
