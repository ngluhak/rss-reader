<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RecommendController;
use App\Http\Controllers\SourceController;

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

//article

Route::get('/article', [ArticleController::class, 'index'])
->name('articles.index');
Route::get('/article/delete/{article}', [ArticleController::class, 'destroy'])
->name('article.destroy');

Route::get('/article/edit/{article}',[ArticleController::class, 'edit'])
->name('article.edit');
Route::put('/article/update/{article}',[ArticleController::class, 'update'])
->name('article.update');

//Route::resource('/article', ArticleController::class);



//follows
Route::get('/follow', 'App\\Http\\Controllers\\FollowController@index')
->name('follows.index');

//all users
Route::get('/user', 'App\\Http\\Controllers\\UserController@index')
->name('users.index');

//source
Route::get('/source', 'App\\Http\\Controllers\\SourceController@index')
->name('sources.index');
Route::post('create', [SourceController::class, 'create'])->name('sources.create'); 


//recommend
Route::get('/recommend', 'App\\Http\\Controllers\\RecommendController@index')
->name('recommends.index');
Route::get('/recommend/delete/{delete}', [RecommendController::class, 'destroy'])
->name('recommend.destroy');

//additional
Route::get('/contact', 'App\\Http\\Controllers\\CountryController@index')
->name('contact.index');
Route::get('/gallery', 'App\\Http\\Controllers\\GalleryController@index')->name('gallery');
Route::get('about', [AboutController::class, 'index'])->name('about');

//registracija/login
Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

//rss feed
//Route::get('feed', 'ArticleController@feed');


