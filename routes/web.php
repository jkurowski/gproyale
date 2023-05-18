<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('routes', function() {
    \Artisan::call('route:list');
    return '<pre>' . \Artisan::output() . '</pre>';
});

Route::middleware(['restrictIp'])->group(function () {
    Route::group(['namespace' => 'Front'], function () {

        Route::get('/', 'IndexController@index')->name('index');
        Route::get('/contact', 'ContactController@index')->name('contact');
        Route::get('/gallery', 'Gallery\IndexController@index')->name('gallery');
        Route::get('/privacy-policy', 'Privacy\IndexController@index')->name('privacy');
        Route::get('/terms-and-conditions', 'Terms\IndexController@index')->name('terms');
        Route::get('/b2b-concierge', 'Corporate\B2bController@index')->name('b2b');
        Route::get('/corporate-conference-and-events', 'Corporate\EventController@index')->name('events');
        Route::get('/team-building', 'Corporate\TeamController@index')->name('team');
        Route::get('/dubai-activities', 'Activities\IndexController@index')->name('activities');
        Route::get('/bespoke-event-concierge', 'Bespoke\IndexController@index')->name('bespoke');
        Route::get('/abu-dhabi-grand-prix', 'Abudhabi\IndexController@index')->name('abudhabi');

    });

    // Inline
    Route::group(['namespace' => 'Front', 'prefix'=>'/inline/', 'as' => 'front.inline.'], function() {
        Route::get('/', 'InlineController@index')->name('index');
        Route::get('/loadinline/{inline}', 'InlineController@show')->name('show');
        Route::post('/update/{inline}', 'InlineController@update')->name('update');
    });
});