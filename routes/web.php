<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomAuthController;

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

Route::get('/', [HomeController::class, 'dashboard']
)-> name('dashboard');

Route::get('/article', 'App\\Http\\Controllers\\ArticleController@index')
->name('articles.index');
Route::get('/follow', 'App\\Http\\Controllers\\FollowController@index')
->name('follows.index');
Route::get('/user', 'App\\Http\\Controllers\\UserController@index')
->name('users.index');
Route::get('/source', 'App\\Http\\Controllers\\SourceController@index')
->name('sources.index');
Route::get('/recommend', 'App\\Http\\Controllers\\RecommendController@index')
->name('recommends.index');

Route::get('/gallery', 'App\\Http\\Controllers\\GalleryController@index')
->name('gallery.index');

Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

//rss feed
Route::get('feed', 'ArticleController@feed');

