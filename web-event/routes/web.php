<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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

//auth route for both

Route::group(['middleware' => ['auth']], function(){
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name
    ('dashboard');
});

//auth route for admin

Route::group(['middleware' => ['auth', 'role:admin']], function(){
    Route::get('/dashboard/content', 'App\Http\Controllers\DashboardController@content')->name
    ('dashboard.content');
    Route::post('/dashboard/content/store', 'App\Http\Controllers\DashboardController@storeContent')->name
    ('dashboard.store.content');
    Route::get('/dashboard/payment', 'App\Http\Controllers\DashboardController@payment')->name
    ('dashboard.payment');
    Route::get('/dashboard/addSlider', 'App\Http\Controllers\DashboardController@addSlider')->name
    ('dashboard.addSlider');
    Route::get('/dashboard/editSlider/{id}', 'App\Http\Controllers\DashboardController@editSlider')->name
    ('dashboard.editSlider');
    Route::put('/dashboard/updateSlider/{id}', 'App\Http\Controllers\DashboardController@updateSlider')->name
    ('dashboard.updateSlider');
    Route::post('/dashboard/content/{id}', 'App\Http\Controllers\DashboardController@destroySlider')->name
    ('dashboard.destroySlider');

});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/dashboard/create/event', 'App\Http\Controllers\EventController@create')->name
    ('dashboard.create.event');

Route::post('/dashboard/store/event', 'App\Http\Controllers\EventController@store')->name
('dashboard.store.event');

Route::get('/dashboard/event', 'App\Http\Controllers\EventController@index')->name
('dashboard.event');

Route::get('/dashboard/event/detail/{id}', 'App\Http\Controllers\EventController@detail')->name
('dashboard.event.detail');

Route::get('/dashboard/event/edit/{id}', 'App\Http\Controllers\EventController@edit')->name
('dashboard.event.edit');

Route::put('/dashboard/event/update/{id}', 'App\Http\Controllers\EventController@update')->name
('dashboard.event.update');

//user management

Route::get('/dashboard/user', 'App\Http\Controllers\UserController@index')->name
('dashboard.user');

Route::get('/dashboard/user/create', 'App\Http\Controllers\UserController@create')->name
('dashboard.user.create');

Route::post('/dashboard/user/store', 'App\Http\Controllers\UserController@store')->name
('dashboard.user.store');

Route::get('/dashboard/user/edit/{id}', 'App\Http\Controllers\UserController@edit')->name
('dashboard.user.edit');

Route::put('/dashboard/user/update/{id}', 'App\Http\Controllers\UserController@update')->name
('dashboard.user.update');

Route::post('/dashboard/user/destroy/{id}', 'App\Http\Controllers\UserController@destroy')->name
    ('dashboard.user.destroy');





require __DIR__.'/auth.php';
