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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace'=>'Home'],function (){

    Route::get('/','HomeController@index');
    Route::get('/skill','HomeController@skill');
    Route::get('/about','HomeController@about');
    Route::get('/portfolio','HomeController@portfolio');
    Route::get('/contact','HomeController@contact');

});

Route::group(['namespace'=>'Admin'],function (){
    Route::get('/admin','IndexController@index');
    Route::get('/admin/login','LoginController@index');
    Route::get('/admin/register','LoginController@register');
    Route::get('/admin/login/login','LoginController@login');
    Route::get('/admin/index','IndexController@index');
    Route::get('/admin/index/grids','IndexController@grids');
    Route::get('/admin/index/graphs','IndexController@graphs');
    Route::get('/admin/index/typography','IndexController@typography');
    Route::get('/admin/index/inbox','IndexController@inbox');
    Route::get('/admin/index/compose','IndexController@compose');
    Route::get('/admin/index/forms','IndexController@forms');
    Route::get('/admin/index/validation','IndexController@validation');
    Route::get('/admin/index/basic_tables','IndexController@basic_tables');
    Route::get('/admin/index/media','IndexController@media');
    Route::get('/admin/index/widgets','IndexController@widgets');
    Route::get('/admin/menu/getMenu','MenuController@getMenu');
    Route::post('/admin/menu/getMenu','MenuController@getMenu');
    Route::get('/admin/menu/index','MenuController@index');
    Route::post('/admin/menu/editMenu','MenuController@editMenu');
    Route::post('/admin/menu/addMenu','MenuController@addMenu');
    Route::post('/admin/menu/delMenu','MenuController@delMenu');
});
