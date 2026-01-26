<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/env-demo', function () {
    return view('env_demo', [
        'name' => config('app.name'),
        'env'  => config('app.env'),
        'status' => config('app.status')
    ]);
});