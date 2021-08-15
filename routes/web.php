<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\MailController;
use App\Http\Controllers\InputController;
use App\Http\Controllers\DetailController;
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
    return view('toppage');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/input_confirmation', function () {
    return view('input_confirmation');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
->name('home');

Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'create'])
    ->middleware('guest')
    ->name('register');

Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'store'])
    ->middleware('guest');

Route::get('/auth/login', [App\Http\Controllers\Auth\LoginController::class, 'index'])
    ->middleware('guest')
    ->name('login');
Route::post('/auth/login', [App\Http\Controllers\Auth\LoginController::class, 'authenticate'])
    ->middleware('guest');

Route::get('/auth/logout', [App\Http\Controllers\Auth\LoginController::Class, 'logout'])
    ->middleware('auth')
    ->name('logout');
Route::POST('/auth/logout', [App\Http\Controllers\Auth\LoginController::Class, 'logout'])
    ->middleware('auth')
    ->name('logout');

Route::get('/send-email',[MailController::class,'sendEmail']);

Route::get('/input', [InputController::class, 'index'])
    ->name('input');
Route::POST('/input', [InputController::class, 'index'])
    ->name('input');

Route::POST('/detail', [DetailController::class, 'detail'])
->name('detail');
Route::POST('/detail', [DetailController::class, 'send'])
->name('detail');
Route::GET('/detail', [DetailController::class, 'send'])
->name('detail');