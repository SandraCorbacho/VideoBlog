<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Admin\ChannelController;
use App\Http\Controllers\Admin\ProfileController;
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

    Route::get('/home',[ProfileController::class, 'index'])->name('profile');
    Route::get('/create/{item}',[StaticController::class, 'create'])->name('create');
    Route::get('/detail/{item}',[StaticController::class, 'detail'])->name('detail');
    
    /*---Canal---*/
    Route::post('/channel/create/{item}',[ChannelController::class, 'create'])->name('createChannel');
    Route::get('/channel/edit/{item}',[ChannelController::class, 'edit'])->name('editChannel');
    Route::post('/channel/edit/{item}',[ChannelController::class, 'edit'])->name('editChannel');
    
    /*----Video---*/
    Route::post('/video/create/{item}',[VideoController::class, 'create'])->name('createVideo');
    Route::get('/video/edit/{item}',[VideoController::class, 'edit'])->name('editVideo');
    Route::post('/video/edit/{item}',[VideoController::class, 'edit'])->name('editVideo');


    Route::get('/edit/{id}', function () {
        return "editar video con id";
    });

    Route::get('/delete/{id}', function () {
        return "borrar video con id";
    });
});



