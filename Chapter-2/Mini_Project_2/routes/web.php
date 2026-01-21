<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

// added route
Route::get('/about', function () {
    return view('about');
});

Route::get('/students', [StudentController::class, 'index']);