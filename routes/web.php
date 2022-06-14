<?php

use Illuminate\Support\Facades\Route;
use App\Models\Todolist;

// Route::get('/', [HomeController::class, 'index']);
// Route::get('/index', [HomeController::class, 'index']);
// Route::get('/about', [HomeController::class, 'about']);
// Route::get('/contact', [HomeController::class, 'contact']);



Route::get('/about', function () {return view('about');});
Route::get('/contact', function () {return view('contact');});

Route::get('/', function () {
    return view('home', [
        'todolist' => Todolist::all()
    ]);
});

Route::get('/index', function () {
    return view('home', [
        'todolist' => Todolist::all()
    ]);
});

Route::get('/viewall', function () {
    return view('viewall', [
        'todolist' => Todolist::all()
    ]);
});
