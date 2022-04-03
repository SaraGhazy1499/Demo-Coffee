<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\EnrollController;
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
});

Route::resource('/users', UserController::class);
Route::resource('/courses', CourseController::class);
Route::resource('/comments', CommentController::class);
Route::resource('/students', EnrollController::class);

Route::get('/mycourses/{id}',[CourseController::class,'mycourses'])->name("mycourses");

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
