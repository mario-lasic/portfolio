<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render("Home", ["message" => "Hello from Laravel!"]);
});
Route::get('/projects', function () {
    return Inertia::render("Projects",[]);
});
Route::get('/learning', function () {
    return Inertia::render("Learning",[]);
});
