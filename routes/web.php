<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\Api\TaskController::class, 'index']);
Route::get('tasks', [App\Http\Controllers\Api\TaskController::class, 'index']);
Route::get('tasks/create', [App\Http\Controllers\Api\TaskController::class, 'create']);
Route::post('tasks', [App\Http\Controllers\Api\TaskController::class, 'store']);
Route::get('tasks/{id}', [App\Http\Controllers\Api\TaskController::class, 'edit']);
Route::put('tasks/{id}', [App\Http\Controllers\Api\TaskController::class, 'update']);
Route::delete('tasks/{id}', [App\Http\Controllers\Api\TaskController::class, 'destroy']);

// Route::get('/', function () {
//     return view('welcome');
// });

?>