<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\UserController;
use app\Http\Controllers\PembayaranController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\ChangepasswordController;
use App\Http\Controllers\UbahprofileController;
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

Route::get('/editpro', function () {
    return view('editpro');
});

Route::get('/article', function () {
    return view('layouts/article');
});

Route::get('/pembayaran', function () {
    return view('layouts/pembayaran');
});

Route::get('/profile', [ProfileController::class, 'view']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/editpasw', [ChangepasswordController::class, 'change_password']);
Route::post('/tumkm_update/{id}',[TumkmController::class, 'update'])->name('tumkm_update');

// Route::get('/editpro', [UbahprofiledController::class, 'update']);
// Route::post('/editpro', [UbahprofiledController::class, 'update_profil']);
Route::resource('editpro', UbahprofileController::class);
// Route::post('/update-password','ChangepasswordController')->name('update_password');