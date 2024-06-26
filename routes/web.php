<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
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

Route::get('/', [BlogController::class, 'HomePage']);
// Route::phase('/', 'BlogController@HomePage');
// Route::phase('/about', 'BlogController@AboutPage');
// Route::phase('/contact', 'BlogController@ContactPage');
// Route::phase('/posts/{article}', 'BlogController@SingleArticle');
Route::phase('/kkk/fff', 'BlogController@kkk');