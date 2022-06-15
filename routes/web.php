<?php

use Illuminate\Support\Facades\Route;
use App\Models\Todolist;
use App\Http\Controllers\todolistController;


// index - Home page
// viewall - selects all
// create - Show form to create a new todo list
// store - Store new todo list
// edit - Show form to edit a todo list
// update - Update a todo list
// destroy - delete a todo list


Route::get('/', [todolistController::class, 'index']);
Route::get('/index', [todolistController::class, 'index']);
Route::get('/viewall', [todolistController::class, 'viewall']);
Route::get('/create', [todolistController::class, 'create']);
Route::post('/', [todolistController::class, 'store']);

Route::get('/about', [todolistController::class, 'about']);
Route::get('/contact', [todolistController::class, 'contact']);
