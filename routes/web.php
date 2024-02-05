<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\informationController;

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

Route::group(["prefix" => 'information', 'as' => 'information.'], function () {
    Route::get('/', [informationController::class, 'index'])->name('index');
    Route::get('/view', [informationController::class, 'view'])->name('view');
    Route::post('/store', [informationController::class, 'store'])->name('store');
    Route::get('/signup', [informationController::class, 'signup'])->name('signup');
});


// Route::group(["prefix"=> 'information', 'as' => 'information.'], function () {
//     Route::get('/', [informationController::class,'index'])->name('index');
//     Route::get('/view', [informationController::class, 'view'])->name('view');
//     Route::get('/', [informationController::class, 'store'])->name('store');
// });

// Route::get('/', function () {
//     return view('index');
// });
// Route::get('/view', function () {
//     return view('view');
// });

// Route::get('/login', function () {
//     return view('login');
// });
// Route::get('/hello', function () {
//     return response ('');
// });