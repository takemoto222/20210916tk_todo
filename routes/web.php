<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


Route::get('/', [TodoController::class, 'index']);
Route::post('/', [TodoController::class, 'create']);
Route::get('/edit', [TodoController::class, 'edit']);
Route::post('/edit', [TodoController::class, 'update']);
Route::get('/delete/input', [TodoController::class, 'delete']);
Route::post('/delete/input', [TodoController::class, 'remove']);

Route::get('/softdelete', function () {
    TOdo::index($item)->delete();
});