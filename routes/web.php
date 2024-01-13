<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\wewe;
use Illuminate\Support\Facades\Route;

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
    return redirect()->route('user.index');
});
// Route::get('/user',[UserController::class,'dummy']);
Route::get('user',[UserController::class,'index'])->name('user.index');
Route::get('user/register',[UserController::class,'register'])->name('user.register');
Route::post('user/store',[UserController::class,'store'])->name('user.store');
Route::get('user/login',[UserController::class,'login'])->name('user.login');
Route::post('user/authenticate',[UserController::class,'authenticate'])->name('user.authenticate');
Route::get('user/logout',[UserController::class,'logout'])->name('user.logout');
Route::get('user/account',[UserController::class,'account'])->name('user.account'); 

