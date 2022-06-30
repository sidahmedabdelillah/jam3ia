<?php

use App\Http\Controllers\StudentController;
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
    return view('welcome');
});

Route::view('/a' ,'student/select-example' );


Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/student/{id}' ,[StudentController::class , 'studentProfile'])->name('student_profile');
    Route::get('/student/edit/{id}' ,[StudentController::class , 'studentEditProfile'])->name('edit_student');
    Route::post('/student/edit/{id}' ,[StudentController::class , 'studentPutProfile'])->name('put_student');

});

require __DIR__ . '/auth.php';
