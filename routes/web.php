<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\PublicController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PublicController::class, 'index'])->name('home');
Route::prefix('blog')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('blog');
    Route::get('/add', [BlogController::class, 'add'])->name('blog');
    Route::get('/edit/{id}', [BlogController::class, 'edit'])->name('blog');
    Route::post('/_create', [BlogController::class, 'create'])->name('blog');
    Route::post('/_edit', [BlogController::class, 'update'])->name('blog');
    Route::get('/_delete/{id}', [BlogController::class, 'delete'])->name('blog');
});
