<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', 'ArticlesController@index');
Route::get('blog/{id}/{slug}', 'ArticlesController@show');
Route::get('category/{slug}', 'ArticlesController@categories');

Route::get('dashboard', 'SessionsController@dashboard')->before('auth');

Route::get('admin/user/{id}', 'AdminController@user')->before('auth');
Route::get('admin/user/edit/{id}', 'AdminController@user_edit')->before('auth');

Route::any('admin/articles', array('as' => 'admin.articles', 'uses' => 'AdminController@articles'))->before('auth');
Route::any('admin/article/create', array('as' => 'admin.articlecreate', 'uses' => 'AdminController@articlecreate'))->before('auth');
Route::any('admin/article/edit/{id}', array('as' => 'admin.articleedit', 'uses' => 'AdminController@articleedit'))->before('auth');
Route::any('admin/article/delete/{id}', array('as' => 'admin.articledelete', 'uses' => 'AdminController@articledelete'))->before('auth');

Route::any('admin/categories', array('as' => 'admin.categories', 'uses' => 'AdminController@categories'))->before('auth');
Route::any('admin/category/create', array('as' => 'admin.categorycreate', 'uses' => 'AdminController@categorycreate'))->before('auth');
Route::any('admin/category/edit/{id}', array('as' => 'admin.categoryedit', 'uses' => 'AdminController@categoryedit'))->before('auth');
Route::any('admin/category/delete/{id}', array('as' => 'admin.categorydelete', 'uses' => 'AdminController@categorydelete'))->before('auth');

Route::any('admin/pages', array('as' => 'admin.pages', 'uses' => 'AdminController@pages'))->before('auth');
Route::any('admin/page/create', array('as' => 'admin.pagecreate', 'uses' => 'AdminController@pagecreate'))->before('auth');
Route::any('admin/page/edit/{id}', array('as' => 'admin.pageedit', 'uses' => 'AdminController@pageedit'))->before('auth');
Route::any('admin/page/delete/{id}', array('as' => 'admin.pagedelete', 'uses' => 'AdminController@pagedelete'))->before('auth');

Route::any('admin/nav', array('as' => 'admin.nav', 'uses' => 'AdminController@nav'))->before('auth');
Route::any('admin/nav/create', array('as' => 'admin.navcreate', 'uses' => 'AdminController@navcreate'))->before('auth');
Route::any('admin/nav/edit/{id}', array('as' => 'admin.navedit', 'uses' => 'AdminController@navedit'))->before('auth');
Route::any('admin/nav/delete/{id}', array('as' => 'admin.navdelete', 'uses' => 'AdminController@navdelete'))->before('auth');

Route::any('admin/sidebar', array('as' => 'admin.sidebar', 'uses' => 'AdminController@sidebar'))->before('auth');
Route::any('admin/sidebar/create', array('as' => 'admin.sidebarcreate', 'uses' => 'AdminController@sidebarcreate'))->before('auth');
Route::any('admin/sidebar/edit/{id}', array('as' => 'admin.sidebaredit', 'uses' => 'AdminController@sidebaredit'))->before('auth');
Route::any('admin/sidebar/delete/{id}', array('as' => 'admin.sidebardelete', 'uses' => 'AdminController@sidebardelete'))->before('auth');

Route::get('login', 'SessionsController@create');
Route::get('logout', 'SessionsController@destroy');
Route::resource('sessions', 'SessionsController');

Route::get('about', 'PagesController@about');