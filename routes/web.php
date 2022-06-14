<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', [
        'todolist' => ['item 1', 'item 2']
    ]);
});

Route::get('/viewall', function () {
    return view('viewall', [
        'todolist' => ['item 1', 'item 2']
    ]);
});
