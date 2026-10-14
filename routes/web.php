<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Http\Request;


Route::get('/', function () {
    return Inertia::render("Home", ["message" => "Hello from Laravel!"]);
});
Route::get('/projects', function () {
    return Inertia::render("Projects", []);
});
Route::get('/learning', function () {
    return Inertia::render("Learning", []);
});
Route::post('learning/note', function (Request $request) {
    $request->validate(
        ['note' => 'required|string|min:3|max:200']
    );
    return redirect("/learning");
});
