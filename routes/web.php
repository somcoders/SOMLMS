<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;

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

Route::get('/', HomeController::class)->name("home");


Route::get('/profile', function () {
    return view('profile');
})->name("profile");



Route::get("/courses", [CourseController::class,"index"])->name("courses.index");
Route::get("/course/{slug}", [CourseController::class,"show"])->name("courses.show");



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
