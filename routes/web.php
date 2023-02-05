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


Route::get('/profile', function () {
    return view('profile');
})->name("profile");



Route::get("/courses", function () {
    $data = require(database_path() ."/data.php");

    return view("courses.index", ["courses" => $data["courses"]]);
})->name("courses.index");


Route::get("/course/{slug}", function ($slug) {
    $data = require(database_path() ."/data.php");

    $index = array_search($slug, array_column($data["courses"], "slug"));

    if ($index === false) {
        return "404 NOT FOUND";
    }
    $course = $data["courses"][$index];
    return view("courses.show", compact("course"));
})->name("courses.show");



Route::get("/categories", function () {
    $data = require(database_path() ."/data.php");

    return view("categories.index", ["categories" => $data["categories"]]);
})->name("categories.index");


Route::get("/category/{slug}", function ($slug) {
    $data = require(database_path() ."/data.php");

    $index = array_search($slug, array_column($data["categories"], "slug"));

    if ($index === false) {
        return "404 NOT FOUND";
    }
    $category = $data["categories"][$index];
    return view("categories.show", compact("category"));
})->name("categories.show");
