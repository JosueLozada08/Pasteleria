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

// Ruta para actualizar un pastel
Route::put('/pasteles/{pastel}', [PastelesController::class, 'update'])->name('pasteles.update');



// Ruta para mostrar el formulario de búsqueda y eliminar pasteles
Route::get('/pasteles/eliminar', [PastelesController::class, 'eliminar'])->name('pasteles.eliminar');

// Ruta para buscar los pasteles por nombre o ID
Route::get('/pasteles/search', [PastelesController::class, 'search'])->name('pasteles.search');

// Ruta para eliminar el pastel
Route::delete('/pasteles/{id}', [PastelesController::class, 'destroy'])->name('pasteles.destroy');


