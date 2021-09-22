<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use Illuminate\Http\Request;

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

Route::get('/', [TodoController::class, 'index'])->name('todo.index');
Route::post('/', [TodoController::class, 'store'])->name('todo.store');
Route::get('/todos/create', [TodoController::class, 'create'])->name('todo.create');
Route::get('/todos/{id}', [TodoController::class, 'show'])->name('todo.show');
Route::get('/todos/{id}/edit', [TodoController::class, 'edit'])->name('todo.edit');
Route::put('/todos/{id}', [TodoController::class, 'update'])->name('todo.update');
Route::delete('/todos/{id}', [TodoController::class, 'destroy'])->name('todo.destroy');

Route::view('/test', 'test');