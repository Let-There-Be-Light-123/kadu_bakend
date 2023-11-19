<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
// use App\Http\Controllers\DatabaseController;



// Route::get('/connect-to-database', [DatabaseController::class, 'connectToDatabase']);
Route::get("/users", function () {
    $users = User::get();
    return response()->json($users);
});
Route::get("/adminusers", function () {
    $users = AdminUsers::get();
    return response()->json($users);
});