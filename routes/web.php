<?php

use App\Http\Controllers\LanguageController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NewsControllernew;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactUsController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
//News Table
Route::get('/create-news', [NewsController::class, 'Index']);
Route::get('/store-news', [NewsController::class, 'Store']);
Route::get('/news-list', [NewsController::class, 'Show']);

// LANGUAGES
Route::get('/languages', [LanguageController::class, 'index'])->name('languages.index');
Route::get('/create-languages', [LanguageController::class, 'create'])->name('languages.create');
Route::post('/languages', [LanguageController::class, 'store'])->name('languages.store');
Route::delete('/languages/{id}', [LanguageController::class, 'destroy'])->name('languages.destroy');

//Category Table
Route::get('/add-category',[CategoryController::class,'addCategory']);
Route::post('/add-category',[CategoryController::class,'storeCategory']);
Route::get('/show-category',[CategoryController::class,'showCategory']);
Route::get('/delete-category/{id}',[CategoryController::class,'deleteCategory']);

//ContactUs Table
Route::get('/contact-us',[ContactUsController::class,'addContactUs']);
Route::post('/contact-uss',[ContactUsController::class,'storeContactUs']);
Route::get('/show-contactus',[ContactUsController::class,'showContactUs']);
Route::get('/delete-contactus/{id}',[ContactUsController::class,'deleteContactUs']);


});
