<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\ExistingUserController;
use App\Http\Controllers\DatabaseController;
use App\Models\User;
use App\Http\Controllers\Auth\CustomRegisterController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/connect-to-database', [DatabaseController::class, 'fetchUsers']);

Route::get("/users", function () {
    $users = User::get();
    return response()->json($users);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/register', [CustomRegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [CustomRegisterController::class, 'register']);
