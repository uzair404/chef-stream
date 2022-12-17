<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChangePassword;
use App\Http\Controllers\SocialController;
use App\Models\User;
use App\Notifications\CustomEmail;
use Illuminate\Support\Facades\Notification;


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

// welcome page 
Route::get('/', function () {
    return view('welcome');
});

// testing mail 
Route::get('/mail', function () {
    $user = User::first();
    $data = [
        'name'=> $user->name,
        'body' => 'my body',
        'btn' => 'example button',
        'url' => url('/dashboard')
    ];
    // $user->notify(new CustomEmail($data));
    Notification::send($user, new CustomEmail($data));
    return 'sended';
});

// all dashboard routes
route::group(["prefix"=>'/dashboard', 'middleware'=>['auth','verified']], function(){

Route::get('/setting', function () {
    return view('chef-dashboard.setting');
});

Route::get('/password', [ChangePassword::class, "index"])->name('passwordpage');
Route::post('/password', [ChangePassword::class, "change"])->name('changepass');

Route::get('/courses', function () {
    return view('chef-dashboard.courses');
});

Route::get('/manager', function () {
    return view('chef-dashboard.manager');
});

Route::get('/student', function () {
    return view('chef-dashboard.student');
});

Route::get('/message', function () {
    return view('chef-dashboard.message');
});

Route::get('', function () {
    return view('chef-dashboard.dashboard');
})->name('dashboard');

});

// auth routes
require __DIR__.'/auth.php';

// facebook login
Route::get('auth/facebook', [SocialController::class, 'facebookRedirect'])->name('fb.login');
Route::get('/facebook/callback', [SocialController::class, 'loginWithFacebook']);
Route::get('/facebook/newpass', [SocialController::class, 'enternewpass'])->middleware(['auth'])->name('enternewpass');
Route::post('/facebook/newpass', [SocialController::class, 'storenewpass'])->middleware(['auth'])->name('facebooknewpass');
Route::get('/facebook/enterpass', [SocialController::class, 'enterpass'])->middleware([])->name('facebookenterpass');
Route::post('/facebook/storepass', [SocialController::class, 'storepass'])->middleware(['auth'])->name('facebookstorepass');
