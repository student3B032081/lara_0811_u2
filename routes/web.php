<?php

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
    return 'welcome';
});
Route::get('r2', function () {
    return view('welcome');
});
Route::get('r1', function () {
    return redirect('r2');
});
Route::get('hello/{name}', function ($name) {
    return 'Hello, ' .$name;
});
Route::get('hello/{name}', function ($name='Everybody') {
    return 'Hello, ' .$name;
})->name('hello.index');

