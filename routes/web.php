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
<<<<<<< HEAD
        Auth::routes();
=======
>>>>>>> 858eacacc407897566ea1558eb07b077dcf5fc0e
        Route::get('/', 'HomeController@index')->name('home');
        Route::get('/about', 'HomeController@about')->name('about');
        Route::get('/feedback', 'HomeController@feedback')->name('feedback');
        Route::get('/post/{id}', 'HomeController@getPost')->name('getpost');
        Route::get('/category/{id}', 'HomeController@getCategory')->name('getcategory');
        Route::get('/changelang/{lang}', 'HomeController@changeLang')->name('changelang');
<<<<<<< HEAD
        Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
        Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');
        Route::post('send-comment', 'HomeController@saveComment')->name('send-comment');
        Route::get('/subscript/{id}', 'HomeController@subscript')->name('subscript');
=======
        Auth::routes();
        Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
        Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');
>>>>>>> 858eacacc407897566ea1558eb07b077dcf5fc0e
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
        Route::get('/deletepost/{id}', 'AdminController@deletePost')->name('admin-deletepost');
        Route::get('/editcategory/{id}', 'AdminController@editCategory')->name('admin-editcategory');
        Route::get('/deletecategory/{id}', 'AdminController@deleteCategory')->name('admin-deletecategory');
        Route::post('/send-edit-post', 'AdminController@sendEditPost')->name('send-edit-post');
        Route::post('/send-edit-category', 'AdminController@sendEditCategory')->name('send-edit-category');
<<<<<<< HEAD
        
=======
>>>>>>> 858eacacc407897566ea1558eb07b077dcf5fc0e
    });
});
