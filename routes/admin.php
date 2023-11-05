<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\{
    AnotacoesController,
};

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

Route::get('/inicio', function () {
    return Inertia::render('Inicio');
})->middleware(['auth', 'verified'])->name('inicio');


// Anotações

Route::controller(AnotacoesController::class)->group(function () {
    Route::get('/anotacoes', 'index')->name('anotacoes.index');
    Route::get('/anotacoes/nova', 'create')->name('anotacoes.create');
    Route::get('/anotacoes/{anotacao}', 'show')->name('anotacoes.show');
    Route::get('/anotacoes/editar/{anotacao}', 'edit')->name('anotacoes.edit');

    Route::post('/anotacoes', 'store')->name('anotacoes.store');
    Route::post('/anotacoes/{anotacao}', 'update')->name('anotacoes.update');
    Route::delete('/anotacoes/{anotacao}', 'destroy')->name('anotacoes.destroy');
});
