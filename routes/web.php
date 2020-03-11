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

// Route::get('/', function () {
//     return view('welcome')s
// });

Route::get('/','frontcontroller@index');
Auth::routes();

Route::get('/admin', 'admin\LoginController@showLoginForm')->name('admin.login');


Route::group(['middleware' => ['authenticatemiddleware']], function () {

////////// category route routes//////////

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/category/save', 'CategoryController@index');
Route::post('/category/save', 'CategoryController@save');
Route::get('/category/manage', 'CategoryController@manage');
Route::get('/category/edit/{id}', 'CategoryController@edit');
Route::post('/category/edit/', 'CategoryController@update');
Route::get('/category/delete/{id}', 'CategoryController@delete');


////////// category route  routes//////////;


////////// product route  routes//////////;

Route::get('/product/save', 'ProductController@index');
Route::post('/product/entry', 'ProductController@save');
Route::get('/product/manage', 'ProductController@manage');
Route::get('product/view/{id}', 'ProductController@view');
Route::get('/product/edit/{id}', 'ProductController@edit');
Route::post('/product/update', 'ProductController@update');
Route::get('/product/delete/{id}', 'ProductController@delete');

    //
});

Route::get('/password/change', 'HomeController@passwordchnage')->name('password.change');
Route::post('/password/update', 'HomeController@passupdate')->name('password.update');

