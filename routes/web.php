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

Route::get('/language/{locale}', 'HomeController@setLanguage')->name('setLanguage');
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ],
    function()
    {
        Route::get('/', 'HomeController@index')->name('home');
        Route::get('/about', 'HomeController@about')->name('about');
        Route::get('/feedback', 'HomeController@feedback')->name('feedback');
        Route::get('/post/{id}', 'HomeController@getPost')->name('getpost');
        Route::get('/category/{id}', 'HomeController@getCategory')->name('getcategory');
        Route::get('/changelang/{lang}', 'HomeController@changeLang')->name('changelang');
        Auth::routes();
        Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
        Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');
    });

//Admin
Route::group(['prefix'=>'/admin'], function($id) {
    
    Route::get('/login', 'AdminController@login')->name('admin-login');
    Route::get('/register', 'AdminController@register')->name('admin-register');
    Route::post('/admin-action-login', 'AdminController@actionLogin')->name('admin-action-login');
    Route::post('/admin-action-register', 'AdminController@actionRegister')->name('admin-action-register');

    Route::middleware(['auth.admin'])->group(function () {
        Route::get('/', 'AdminController@index')->name('admin');
        Route::get('/logout', 'AdminController@logout')->name('admin-logout');
        Route::get('/footer', 'AdminController@posts')->name('admin-footer');
        Route::get('/categories', 'AdminController@categories')->name('admin-categories');
        Route::get('/news', 'AdminController@news')->name('admin-news');
        Route::post('/addcategory', 'AdminController@addcategory')->name('addCategory');
        Route::post('/addpost', 'AdminController@addpost')->name('addPost');
        Route::post('/savesettings', 'AdminController@saveSettings')->name('saveMainSettings');
        Route::post('/savefootersettings', 'AdminController@saveFooterSettings')->name('saveFooterSettings');
        Route::get('/editpost/{id}', 'AdminController@editPost')->name('admin-editpost');
        Route::post('/deletepost', 'AdminController@deletePost')->name('admin-deletepost');
        Route::get('/editcategory/{id}', 'AdminController@editCategory')->name('admin-editcategory');
        Route::post('/deletecategory', 'AdminController@deleteCategory')->name('admin-deletecategory');
        Route::post('/send-edit-post', 'AdminController@sendEditedPost')->name('send-edit-post');
        Route::post('/send-edit-category', 'AdminController@sendEditedCategory')->name('send-edit-post');
    });
});
