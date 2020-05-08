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

//============================= محصولات ====================================
Route::get('/', 'SiteController@ShowHomepage');
Route::get('/category/{name}/{id}', 'SiteController@ShowCategory');
Route::get('/category/{categori}/{name}/{id}', 'SiteController@ShowSubcategory');
Route::post('sort-by-category', 'SiteController@SortByCategory');

Route::get('tags/{id}/products', 'ProductController@ShowTagProducts');


//====================================== درباره ما و ارتباط با ما  =====================================
Route::get('/aboutus', 'SiteController@aboutus')->name('aboutus');
Route::get('/contactus', 'SiteController@contactus')->name('contactus');

//====================================== وبلاگ ===========================================
Route::get('/weblog', 'PostController@index')->name('weblog'); 
Route::get('/weblog/{title}/{id}', 'PostController@SimplePostShow'); 
Route::get('/tag/{id}/posts','PostController@ShowTagPosts');

//====================================== سبد خرید =======================================
Route::get('/cart', 'BasketController@cart')->name('cart')->middleware('UserLoginCheckPhpResponse');
Route::get('/checkout', 'BasketController@checkout')->name('checkout')->middleware('UserLoginCheck');
Route::post('add-to-cart','BasketController@AddToCart')->middleware('UserLoginCheck'); 
Route::post('cart/delete-from-basket','BasketController@RemoveFromBasket')->middleware('UserLoginCheck'); 
Route::post('cart/edit-basket','BasketController@EditBasket')->middleware('UserLoginCheck'); 

//====================================== like =======================================
Route::post('category/rate-to-product','ProductController@RateToProduct')->middleware('UserLoginCheck'); 

//====================================== نظر و امتیازدهی =======================================
Route::post('product/star_rating','CommentController@StoreScore')->middleware('UserLoginCheck'); 
Route::post('product/post_comment','CommentController@StoreComment')->middleware('UserLoginCheck'); 

//====================================== جست و جو =======================================
Route::get('product/search_products','ProductController@SearchProducts')->name('search'); 


