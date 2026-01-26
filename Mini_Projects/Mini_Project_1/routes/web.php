<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/structure', function () {
    return view('structure'); // This looks for structure.blade.php in resources/views
});