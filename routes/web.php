<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\stagiaireController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->middleware('auth')->group(function(){

    Route::get('/home', function(){
        return view ('home');
    });

    Route::resource('stagiaires', 'App\Http\Controllers\stagiaireController');

});

