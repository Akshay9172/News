<?php

use App\Http\Controllers\LanguageController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NewsControllernew;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
// use App\Http\Controllers\BlogController

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
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

Route::get('/', function() {
    return view('welcome');
});

Route::get('/show-blog', function(){
    return view('Blog.DisplayBlog');
});


Route::get('/create-news', [NewsController::class, 'Index']);
Route::get('/store-news', [NewsController::class, 'Store']);
Route::get('/news-list', [NewsController::class, 'Show']);




// LANGUAGES
Route::get('/languages', [LanguageController::class, 'index'])->name('languages.index');
Route::get('/create-languages', [LanguageController::class, 'create'])->name('languages.create');
Route::post('/languages', [LanguageController::class, 'store'])->name('languages.store');
Route::delete('/languages/{id}', [LanguageController::class, 'destroy'])->name('languages.destroy');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


