<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Admin\ChannelController;
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

Route::prefix('admin')->middleware('role')->group(function () {

    Route::get('/home',[StaticController::class, 'profile'])->name('profile');
    Route::get('/create/{item}',[StaticController::class, 'create'])->name('create');
    Route::post('/create/{item}',[VideoController::class, 'create']);
    Route::post('/create/{item}',[ChannelController::class, 'create']);

    Route::get('/edit/{id}', function () {
        return "editar video con id";
    });

    Route::get('/delete/{id}', function () {
        return "borrar video con id";
    });
});



