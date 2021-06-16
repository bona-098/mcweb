<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\UserController;
use app\Http\Controllers\PembayaranController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\ChangepasswordController;
use App\Http\Controllers\UbahprofileController;
use App\Http\Controllers\PsikologController;
use App\Http\Controllers\JanjiController;
use App\Http\Controllers\AdminjanjiController;
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

Route::get('/user', function () {
    return view('layouts/user');
});

Route::get('/adminjanji', function () {
    return view('layouts/adminjanji');
});

Route::get('/detailjanji', function () {
    return view('layouts/detailjanji');
});

Route::get('/editpro', function () {
    return view('editpro');
});

Route::get('/article', function () {
    return view('layouts/article');
});

// Route::get('/psikolog', function () {
//     return view('layouts/psikolog');
// });

Route::get('/buatjanji', function () {
    return view('layouts/buatjanji');
});

Route::get('/pembayaran', function () {
    return view('layouts/pembayaran');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/profile', [ProfileController::class, 'view']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/editpasw', [ChangepasswordController::class, 'change_password']);
Route::post('/tumkm_update/{id}',[TumkmController::class, 'update'])->name('tumkm_update');
Route::resource('editpro', UbahprofileController::class);
Route::resource('/psikolog', PsikologController::class);
// Route::resource('buatjanji', JanjiController::class);
Route::resource('buatjanji', JanjiController::class);
Route::resource('adminjanji', AdminjanjiController::class);