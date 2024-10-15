<?php
use App\Http\Controllers\PastelesController;
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
    return view('welcome');
});

// Ruta para crear una pasteles
Route::get('/pasteles/crear', [PastelesController::class, 'crear'])->name('pasteles.crear');

// Ruta para guardar una pasteles
Route::post('/pasteles/bank', [PastelesController::class, 'store'])->name('pasteles.bank');


// Ruta para leer las personas
Route::get('/pasteles/leer', [PastelesController::class, 'leer'])->name('pasteles.leer');

// Ruta para actualizar una pasteles
Route::put('/pasteles/{pasteles}', [PastelesController::class, 'update'])->name('pasteles.update');

// Ruta para eliminar una pasteles
Route::delete('/pasteles/{id}', [PastelesController::class, 'destroy'])->name('pasteles.destroy');
