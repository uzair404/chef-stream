<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChangePassword;

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

Route::get('/dashboard/setting', function () {
    return view('chef-dashboard.setting');
})->middleware(['auth', 'verified']);

Route::get('/dashboard/password', [ChangePassword::class, "index"])->name('passwordpage')->middleware(['auth', 'verified']);
Route::post('/dashboard/password', [ChangePassword::class, "change"])->name('changepass')->middleware(['auth', 'verified']);

Route::get('/dashboard/courses', function () {
    return view('chef-dashboard.courses');
})->middleware(['auth', 'verified']);

Route::get('/dashboard', function () {
    return view('chef-dashboard.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
