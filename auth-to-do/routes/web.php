<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TodoController;
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

Route::get('/todos', [TodoController::class, 'index'])->name("index");
Route::get('/todos/add', [TodoController::class, 'add'])->name("add");
Route::post('/todos/add', [TodoController::class, 'insert'])->name("insert");
Route::get('/todos/{id}', [TodoController::class, 'edit'])->name("edit");
Route::put('/todos/{id}', [TodoController::class, 'update'])->name("update");
Route::get('/todos/{id}/delete', [TodoController::class, 'delete'])->name("delete");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/login_view', [AuthController::class, 'getView']);
Route::get('/auth/google/redirect', [AuthController::class, 'googleRedirect'])->name('googleRedirect');
Route::get('/auth/google/callback', [AuthController::class, 'googleCallback'])->name('googleCallback');