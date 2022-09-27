<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\CreateController;

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

Route::name('handle.')->group(function () {    
    Route::post('/handle-create-order', [CreateController::class, 'handleCreateOrder'])->name('create.order');
});
