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


Route::get('/distribuidors', [App\Http\Controllers\DistribuidorController::class, 'index'])->name('distribuidors.index');

Route::get('/distribuidors/show/{id}', [App\Http\Controllers\DistribuidorController::class, 'show'])->name('distribuidors.show');
Route::get('/distribuidors/create', [App\Http\Controllers\DistribuidorController::class, 'create'])->name('distribuidors.create');
Route::post('/distribuidors/store', [App\Http\Controllers\DistribuidorController::class, 'store'])->name('distribuidors.store');
Route::get('/distribuidors/destroy/{id}', [App\Http\Controllers\DistribuidorController::class, 'destroy'])->name('distribuidors.destroy');
Route::get('/distribuidors/edit/{id}', [App\Http\Controllers\DistribuidorController::class, 'edit'])->name('distribuidors.edit');
Route::post('/distribuidors/update/{id}', [App\Http\Controllers\DistribuidorController::class, 'update'])->name('distribuidors.update');

Route::get('/productos', [App\Http\Controllers\ProductoController::class, 'index'])->name('productos.index');

Route::get('/productos/show/{id}', [App\Http\Controllers\ProductoController::class, 'show'])->name('productos.show');
Route::get('/productos/create', [App\Http\Controllers\ProductoController::class, 'create'])->name('productos.create');
Route::post('/productos/store', [App\Http\Controllers\ProductoController::class, 'store'])->name('productos.store');
Route::get('/productos/destroy/{id}', [App\Http\Controllers\ProductoController::class, 'destroy'])->name('productos.destroy');
Route::get('/productos/edit/{id}', [App\Http\Controllers\ProductoController::class, 'edit'])->name('productos.edit');
Route::post('/productos/update/{id}', [App\Http\Controllers\ProductoController::class, 'update'])->name('productos.update');

Route::get('/ingredientes', [App\Http\Controllers\IngredienteController::class, 'index'])->name('ingredientes.index');

Route::get('/ingredientes/show/{id}', [App\Http\Controllers\IngredienteController::class, 'show'])->name('ingredientes.show');
Route::get('/ingredientes/create', [App\Http\Controllers\IngredienteController::class, 'create'])->name('ingredientes.create');
Route::post('/ingredientes/store', [App\Http\Controllers\IngredienteController::class, 'store'])->name('ingredientes.store');
Route::get('/ingredientes/destroy/{id}', [App\Http\Controllers\IngredienteController::class, 'destroy'])->name('ingredientes.destroy');
Route::get('/ingredientes/edit/{id}', [App\Http\Controllers\IngredienteController::class, 'edit'])->name('ingredientes.edit');
Route::post('/ingredientes/update/{id}', [App\Http\Controllers\IngredienteController::class, 'update'])->name('ingredientes.update');


