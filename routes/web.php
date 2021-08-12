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
Route::get('/add-student',[StudentController::class,'addStudent']);
Route::post('/create-student',[StudentController::class,'createStudent'])->name('student.create');
Route::get('/student',[StudentController::class,'getStudent']);
Route::get('/student/{id}',[StudentController::class,('getStudentByID')]);
Route::get('/delete-student/{id}',[StudentController::class,('deleteStudent')]);
Route::get('/edit-student/{id}',[StudentController::class,('editStudent')]);
Route::post('/update-student',[StudentController::class,('updateStudent')])->name('student.update');
