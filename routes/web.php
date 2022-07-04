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
    return redirect('/student/1');
});



Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::group(['prefix' => 'student'], function(){
        Route::get('/' ,[StudentController::class, 'studentsTable'])->name('student_table');
        Route::get('/add' ,[StudentController::class, 'studentAddView'])->name('student_add_view');
        Route::post('/' ,[StudentController::class, 'studentAdd'])->name('student_add');
        Route::get('/{id}' ,[StudentController::class, 'studentProfile'])->name('student_profile');
        Route::delete('/{id' , [StudentController::class , 'delelteStudent'])->name('delete_student');
        Route::get('/edit/{id}' ,[StudentController::class, 'studentEditProfile'])->name('edit_student');
        Route::post('/edit/{id}' ,[StudentController::class, 'studentPutProfile'])->name('put_student');

    });


});

require __DIR__ . '/auth.php';
