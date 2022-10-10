<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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

//Zone Sécurisée
Route::middleware(['auth'])->group(function (){ 

    Route::get('/dashboard',[ TodoController::class, 'dashboard'])->name('dashboard');

    Route::get('/tasks' , [TodoController::class, 'index'])->name('tasks');
    Route::post('/tasks', [TodoController::class, "create"]);
    Route::get('/tasks/delete/{id}', [TodoController::class, "delete"]);
    Route::get('/tasks/edit/{id}', [TodoController::class, "edit"]);
    Route::post('/tasks/edit/{id}', [TodoController::class, "update"]);


});




require __DIR__.'/auth.php';
