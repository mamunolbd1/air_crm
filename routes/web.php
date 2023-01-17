<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminPagesController;
use App\Http\Controllers\Frontend\PagesController;

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

//Frontend
Route::get('/','Frontend\PagesController@index')->name('index');

// Backend
Route::group(['prefix' => 'admin'], function()
{
    Route::get('/','Backend\HomeController@index')->name('admin.home');
    Route::resource('/visa/uae','Backend\VisaUAEController');
});
