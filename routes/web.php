<?php

use App\Http\Controllers\fornecedorController;
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



Route::get('/', [fornecedorController::class, 'index_create'])->name('fornecedor.create') ;
Route::post('fornecedor/listar', [fornecedorController::class, 'salvar']) ;
Route::get('fornecedor/listar', [fornecedorController::class, 'listarFORNECEDOR']) ->name('fornecedor.listar');
Route::get('fornecedor/edit/{id}', [fornecedorController::class, 'editarFORNECEDOR']) ->name('fornecedor.edit');
Route::put('fornecedor/listar/{id}', [fornecedorController::class, 'updateFORNECEDOR']) ->name('fornecedor.update');
Route::delete('fornecedor/eliminar/{id}', [fornecedorController::class, 'eliminarFORNECEDOR'])->name('fornecedor.eliminar') ;
Route::post('validacao/', App\Http\Controllers\ValidacaoController::class);

