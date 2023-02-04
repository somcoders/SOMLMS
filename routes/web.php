<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name("home");


Route::get("/courses", function () {
    $courses = require(database_path() ."/data.php");

    return view("courses.index", ["courses" => $courses]);
})->name("courses.index");


Route::get("/course/{slug}", function ($slug) {
    $courses = require(database_path() ."/data.php");

    $index = array_search($slug, array_column($courses, "slug"));

    if ($index === false) {
        return "404 NOT FOUND";
    }
    $course = $courses[$index];
    return view("courses.show", compact("course"));
})->name("courses.show");
;
