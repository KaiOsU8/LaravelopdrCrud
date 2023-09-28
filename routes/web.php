<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\instructeurController;

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

Route::get('/instructeur', [instructeurController::class, 'index'])->name('instructeur.index');
Route::get('/instructeur/create', [instructeurController::class, 'create'])->name('instructeur.create');
Route::post('/instructeur', [instructeurController::class, 'store'])->name('instructeur.store');
Route::get('/instructeur/{instructeur}/edit', [instructeurController::class, 'edit'])->name('instructeur.edit');
Route::put('/instructeur/{instructeur}/update', [instructeurController::class, 'update'])->name('instructeur.update');
Route::delete('/instructeur/{instructeur}/delete', [instructeurController::class, 'delete'])->name('instructeur.delete');
