<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\NewsController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get("/", [HomeController::class, 'index'])->name('home');

Route::prefix('products')->group(function () {
    Route::get('/1', [ProductsController::class, 'products1'])->name('products1');
    Route::get('/2', [ProductsController::class, 'products2'])->name('products2');
    Route::get('/3', [ProductsController::class, 'products3'])->name('products3');
    Route::get('/4', [ProductsController::class, 'products4'])->name('products4');
});

Route::prefix('program')->group(function() {
    Route::get('/1', [ProgramController::class, 'karir'])->name('program1');
    Route::get('/2', [ProgramController::class, 'magang'])->name('program2');
    Route::get('/3', [ProgramController::class, 'kunjunganindustri'])->name('program3');
});

Route::prefix('news')->group(function() {
    Route::get('/', [NewsController::class, 'news1'])->name('news1');
    Route::get('/{id}', [NewsController::class, 'news2'])->name('news2');
});

Route::get("/about-us", [AboutUsController::class, 'about'])->name('about-us');

Route::get("/contact-us", [ContactUsController::class, 'contact'])->name('contact-us');