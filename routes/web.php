<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TaskController;

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

Route::resource('users', UserController::class);

Route::any('task/index', 'App\Http\Controllers\TaskController@index')->name('indexTask');
Route::any('task/create', [TaskController::class, 'create'])->name('createTask');
Route::any('task/store', [TaskController::class, 'store'])->name('storeTask');
Route::any('task/show', [TaskController::class, 'show'])->name('showTask');
Route::any('task/delete', [TaskController::class, 'destroy'])->name('deleteTask');
Route::any('task/update', [TaskController::class, 'update'])->name('updateTask');
Route::any('task/edit', [TaskController::class, 'edit'])->name('editTask');