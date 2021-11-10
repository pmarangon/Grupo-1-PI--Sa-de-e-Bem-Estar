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

require __DIR__.'/auth.php';

Route::get('/', function () {
    if (\Auth::check()) {
        return redirect()->route('home');
    }

    return view('tela_inicial');
});

Route::middleware(['auth'])->prefix('home')->group(function() {
    Route::view('/', 'home')->name('home');
});
