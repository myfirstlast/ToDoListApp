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

// Show create form
Route::get('/create', [todolistController::class, 'create']);
// Store a task
Route::post('/', [todolistController::class, 'store']);

// Show the edit form
Route::get('/{task}/edit', [todolistController::class, 'edit']);
// Update the task
Route::put('/{task}', [todolistController::class, 'update']);

// Delete task
Route::delete('/{task}', [todolistController::class, 'destroy']);


Route::get('/about', [todolistController::class, 'about']);
Route::get('/contact', [todolistController::class, 'contact']);
