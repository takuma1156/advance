<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KintaiController;
use App\Http\Controllers\AttendanceController;

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
Route::get('/', [KintaiController::class,'index']);
Route::post('/attendance_start', [KintaiController::class,'attendance_start']);
Route::post('/attendance_end', [KintaiController::class,'attendance_end']);
Route::get('/attendance', [AttendanceController::class,'index']);

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';