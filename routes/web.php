<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\StudentController;

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



Route::get('/', function () {
    return redirect('/student');
});


Route::get('/student', [StudentController:: class,'index'])
    ->name('student.index');

Route::get('/student/add', [StudentController::class, 'create'])
    ->name('student.create');
Route::POST('/student/add', [StudentController::class, 'create'])
    ->name('student.store');
Route::get('/student/edit/{id}', [StudentController::class, 'edit'])
    ->name('student.edit');