<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/assesment-test', function () {
    return view('alumni-tracer');
});