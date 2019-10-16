<?php


Auth::routes(['register' => false]);


/***********************
    route for backend
 * ********************/
Route::group(['as' => 'backend.', 'prefix' => 'backend', 'namespace' => 'Backend', 'middleware' => ['auth']], function (){
    /***********************
        route for admin
     * ********************/
    Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['admin']], function (){
        //write here admin routes
        Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
        // About us route
        Route::get('/aboutus', 'AboutUsController@index')->name('aboutus');
        Route::post('/aboutus', 'AboutUsController@store')->name('post_aboutus');
    });
    /***********************
        route for teacher
     * ********************/
    Route::group(['as' => 'teacher.', 'prefix' => 'teacher', 'namespace' => 'Teacher', 'middleware' => ['teacher']], function (){
        //write here teacher routes
        Route::get('/dashboard', function(){return "Teacher Dashboard";})->name('dashboard');

    });
    /***********************
        route for student
     * ********************/
    Route::group(['as' => 'student.', 'prefix' => 'student', 'namespace' => 'Student', 'middleware' => ['student']], function (){
        //write here student routes
        Route::get('/dashboard', function(){return "Student Dashboard";})->name('dashboard');
    });
});
/***********************
    route for frontend
 * ********************/
Route::group(['as' => 'frontend.', 'namespace' => 'Frontend'], function (){
    //write here frontend routes
    Route::get('/', function () {
        return view('welcome');
    });
});
