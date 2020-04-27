<?php

use App\User;
use App\Models\Roles;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('role');

//============================= دسته بندی محصولات ====================================
Route::get('/', 'SiteController@ShowHomepage');
Route::get('/category/{name}/{id}', 'SiteController@ShowCategory');
Route::get('/category/{categori}/{name}/{id}', 'SiteController@ShowSubcategory');

//====================================== درباره ما و ارتباط با ما  =====================================
Route::get('/aboutus', 'SiteController@aboutus')->name('aboutus');
Route::get('/contactus', 'SiteController@contactus')->name('contactus');

//====================================== وبلاگ ===========================================
Route::get('/weblog', 'SiteController@weblog')->name('weblog');

//====================================== سبد خرید =======================================
Route::get('/cart', 'BasketController@cart')->name('cart')->middleware('UserLoginCheck');
Route::get('/checkout', 'BasketController@checkout')->name('checkout')->middleware('UserLoginCheck');
Route::post('add-to-cart','BasketController@AddToCart')->middleware('UserLoginCheck'); 
Route::post('category/rate-to-product','BasketController@RateToProduct')->middleware('UserLoginCheck'); 
Route::post('cart/delete-from-basket','BasketController@RemoveFromBasket')->middleware('UserLoginCheck');




