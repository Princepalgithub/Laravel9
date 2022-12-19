<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});


Route::get('add-student', [StudentController::class, 'create']);
Route::post('add-student', [StudentController::class, 'store']);
Route::get('students', [StudentController::class, 'index']);
Route::get('edit-student/{id}', [StudentController::class, 'edit']);
Route::post('update-student/{id}', [StudentController::class, 'update']);
Route::get('delete-student/{id}', [StudentController::class, 'destroy']);
Route::get('save-students', [StudentController::class, 'images']);
Route::post('save-student', [StudentController::class, 'image']);
Route::get('student', [StudentController::class, 'index1']);