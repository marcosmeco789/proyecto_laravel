<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

// Ensure that the LoginController class exists in the specified namespace
// If it doesn't exist, create it in the App\Http\Controllers directory

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


// Ruta para el login
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');


// Ruta para el registro
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);


// Redirigir la ruta raíz al login
Route::get('/', function () {
    return redirect()->route('login');
});

// Ruta para el home (página principal después del login)
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Grupo de rutas protegidas por autenticación
Route::middleware('auth')->group(function () {
    // Rutas para Categorías
    Route::resource('categorias', CategoriaController::class);

    // Rutas para Productos
    Route::resource('productos', ProductoController::class);
});