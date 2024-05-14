<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\toycontroller;

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
    return view('pages.home');
});
<<<<<<< HEAD
Route::get('/daycare', function () {
    return view('pages.services.daycare');
});
Route::get('/dogwalking', function () {
    return view('pages.services.dogwalking');
});
Route::get('/grooming', function () {
    return view('pages.services.grooming');
});
Route::get('/boarding', function () {
    return view('pages.services.boarding');
});
Route::get('/training', function () {
    return view('pages.services.training');
});
Route::get('/veterinarycare', function () {
    return view('pages.services.veterinarycare');
});
=======
>>>>>>> 51d447517cf1e5ddb9a3a3caef440ecbe54e3afe

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
