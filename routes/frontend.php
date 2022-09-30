<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;

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

Route::name('frontend.')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
    Route::get('/list-ordered', [HomeController::class, 'listOrdered'])->name('manage.list.ordered');
    Route::get('/detail-ordered/{id}', [HomeController::class, 'detailOrdered'])->name('manage.detail.ordered');
    Route::get('/edit-ordered/{id}', [HomeController::class, 'editOrdered'])->name('manage.edit.ordered');

    Route::get('/back', [HomeController::class, 'back'])->name('back');
    Route::get('/cancel/{id}', [HomeController::class, 'cancel'])->name('cancel');
});
