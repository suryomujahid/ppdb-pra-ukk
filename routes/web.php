<?php

use App\Http\Controllers\RegistrarController;
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
    return view('index');
})->name('index');

Route::get('/dashboard', [RegistrarController::class, 'index'])->name('registrar.index');
Route::prefix('registrar')->name('registrar.')->group(function () {
    Route::post('/create', [RegistrarController::class, 'create'])->name('create');
    Route::get('/{id}/delete', [RegistrarController::class, 'delete'])->name('delete');
    Route::get('/{id}/print', [RegistrarController::class, 'print'])->name('print');
    Route::get('/{id}/edit', [RegistrarController::class, 'detail'])->name('edit');
    Route::patch('/{id}/update', [RegistrarController::class, 'update'])->name('update');
});

