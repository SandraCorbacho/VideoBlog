<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::put('post/{id}', function ($id) {
    //
})->middleware('auth', 'role:admin');

/*Route::resource([
    'properties'=>'PropertyController',
    'publications'=>'PublicationController'
        ]);*/


Route::get('/profile',function(){
    return view('admin.profile');
})->name('profile');
Route::get('/create/video',function(){
    return view('admin.form.create');
});


