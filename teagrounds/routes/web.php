<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/about', function () {
    return view('about');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/catalog', function () {
    return view('catalog');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/OpenNews', function () {
    return view('OpenNews');
});

Route::get('/OpenTovar', function () {
    return view('OpenTovar');
});

Route::get('/product', function () {
    return view('product');
});
Route::get('/history', function () {
    return view('history');
});
Route::get('/help', function () {
    return view('help');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
