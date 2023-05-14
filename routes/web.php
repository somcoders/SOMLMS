<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AdminCourseController;
use App\Http\Controllers\Admin\AdminCategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', HomeController::class)->name("home");


Route::get('/student/profile', function () {
    return view('profile');
})->name("profile")->middleware("auth");


Route::get("/courses", [CourseController::class,"index"])->name("courses.index");
Route::get("/course/{slug}/{lesson?}", [CourseController::class,"show"])->name("courses.show");

Route::resource("/categories", CategoryController::class)->only(["index","show"]);

Route::get('/dashboard', DashboardController::class)->middleware(['auth','verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix("admin")->name("admin.")->group(function () {
        Route::resource("categories", AdminCategoryController::class);
        Route::resource("courses", AdminCourseController::class);
    });
});

require __DIR__.'/auth.php';
