<?php

use App\Http\Controllers\PokemonController;
use App\Models\Pokemon;
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

// rotta che utilizza il metodo index attraverso la classe PokemonController
Route::get('/', [PokemonController::class, 'index'])->name('pages.index');
Route::get('/pokemon/create', [PokemonController::class, 'create'])->name('pages.create');
Route::get('/pokemon/{id}', [PokemonController::class, 'show'])->name('pages.show');
Route::get('/pokemon/{id}/edit', [PokemonController::class, 'edit'])->name('pages.edit');
Route::post('/', [PokemonController::class, 'store'])->name('pages.store');
Route::put('/pokemon/{id}', [PokemonController::class, 'update'])->name('pages.update');
Route::delete('/pokemon/{id}', [PokemonController::class, 'destroy'])->name('pages.delete');