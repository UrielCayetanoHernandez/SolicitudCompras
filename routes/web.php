<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\Categoria1Controller;
use App\Http\Controllers\Categoria2Controller;
use App\Http\Controllers\ProductoController;



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



Route::resource('/Rol',RolController::class);
Route::resource('/Usuario',UsuarioController::class);

Route::resource('/Categoria1',Categoria1Controller::class);
Route::resource('/Categoria2',Categoria2Controller::class);
Route::resource('/Producto',ProductoController::class);

