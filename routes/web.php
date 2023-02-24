<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;

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

//Using Tinker
Route::get('/', HomeController::class)->name("home");


Route::get('/profile', function () {
    return view('profile');
})->name("profile");


Route::get("/courses", [CourseController::class,"index"])->name("courses.index");
Route::get("/course/{slug}", [CourseController::class,"show"])->name("courses.show");

Route::resource("/categories", CategoryController::class)->only(["index","show"]);
