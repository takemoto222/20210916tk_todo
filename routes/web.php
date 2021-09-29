<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


Route::get('/', [TodoController::class, 'index']);
Route::post('/', [TodoController::class, 'create']);
Route::get('/edit/index', [TodoController::class, 'edit'])->name('todo_edit');
Route::post('/edit/index', [TodoController::class, 'update'])->name('todo_update');
Route::get('/delete/index', [TodoController::class, 'delete']);
Route::post('/delete/index', [TodoController::class, 'remove']);


