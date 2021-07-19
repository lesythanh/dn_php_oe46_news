<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('home', function () {
    return view('page.user.home');
})->name('home');
Route::get('tem', function () {
    return view('page.user.tem');
})->name('tem');
Route::get('matchresult', function () {
    return view('page.user.matchresult');
})->name('matchresult');
Route::get('detail', function () {
    return view('page.user.detail');
})->name('detail');
Route::get('bloglist', function () {
    return view('page.user.bloglist');
})->name('bloglist');
Route::get('bloggrid', function () {
    return view('page.user.bloggrid');
})->name('bloggrid');
Route::get('blogdetail', function () {
    return view('page.user.blogdetail');
})->name('blogdetail');
Route::get('contact', function () {
    return view('page.user.contact');
})->name('contact');
Route::get('404', function () {
    return view('page.user.404');
})->name('error');
