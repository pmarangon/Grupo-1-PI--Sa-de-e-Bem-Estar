<?php

use App\Http\Controllers\GruposController;

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

Route::get('/', function() {
    return \Auth::check() ? redirect()->route('grupos-listar') : view('inicial.listar');
});

Route::middleware(['auth'])->prefix('grupos')->group(function() {
    Route::view('/cadastrar', 'grupos.cadastrar')->name('grupos-cadastrar');

    Route::get('/entrar/{grupo}', [GruposController::class, 'entrar'])->name('grupos-entrar');
    Route::get('/listar', [GruposController::class, 'index'])->name('grupos-listar');

    Route::post('/criar', [GruposController::class, 'criar'])->name('grupos-criar');

    Route::delete('/apagar/{grupo}', [GruposController::class, 'apagar'])->name('grupos-apagar');
});
