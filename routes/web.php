<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Api\TaskController;
use App\Http\Controllers\Auth\RegisterController;
  
Route::middleware('guest')->group(function() {
    Route::get("register", [RegisterController::class, 'create'])->name('register');
    Route::post("register", [RegisterController::class, 'store'])->name('register.store');
    Route::get('login', [AuthController::class, 'create'])->name('login');
    Route::post('login', [AuthController::class, 'store'])->name('login.store');
});
 
Route::middleware('auth')->group(function() {
    Route::get('tasks', [App\Http\Controllers\Api\TaskController::class, 'index']);
    Route::get('/', [App\Http\Controllers\Api\TaskController::class, 'index']);
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});

Route::get('tasks/create', [App\Http\Controllers\Api\TaskController::class, 'create']);
Route::post('tasks', [App\Http\Controllers\Api\TaskController::class, 'store']);
Route::get('tasks/{task}', [App\Http\Controllers\Api\TaskController::class, 'edit']);
Route::put('tasks/{task}', [App\Http\Controllers\Api\TaskController::class, 'update']);
Route::delete('tasks/{task}', [App\Http\Controllers\Api\TaskController::class, 'destroy']);
 
 
?>