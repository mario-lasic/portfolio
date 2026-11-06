<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ProjectController;

Route::get('/', function () {
    return Inertia::render("Home", []);
});
Route::get('/projects', [ProjectController::class, "index"]);
Route::get('/projects/{slug}', [ProjectController::class, "show"]);
