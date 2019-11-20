<?php

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

Route::get('/login','AuthenticationController@login')->name('auth.login');
Route::post('/login','AuthenticationController@loginUser')->name('auth.login-user');
Route::get('/sign-up','AuthenticationController@create')->name('auth.sign-up');
Route::post('/sign-up','AuthenticationController@store')->name('auth.sign-up');
Route::get('/logout','AuthenticationController@logout')->name('auth.logout');

Route::get('/teachers/classes','TeacherController@index')->name('teachers.classes.index');

Route::get('/teachers/classes/create','EclassController@create')->name('teachers.classes.create');
Route::post('/teachers/classes/create','EclassController@store')->name('teachers.classes.store');
Route::post('/teachers/classes/create','EclassController@store')->name('teachers.classes.store');
Route::get('/teachers/classes/openclass/{id}','EclassController@openclass');
Route::get('/teachers/subjects/set-subject/{id}','SubjectsController@indexwith_id');
Route::post('/teachers/subjects/set-subject/{id}','SubjectsController@set_subject');
Route::resource('subject','SubjectsController');

Route::get('/teachers.categories/index-categories/{id}','CategoryController@index');
Route::get('/teachers.categories/add-category/{id}','CategoryController@addcategory');
Route::post('/teachers.categories/store-category/{id}','CategoryController@storecategory');

// Route::get('create-class',function(){
//     return view('class.create-class');
// });

// Route::get('sign-up',function(){
//     return view('auth.sign-up');
// });

// Route::get('login',function(){
//     return view('auth.login');
// });

// Route::get('add-subject',function(){
//     return view('subjects.add-subject');
// });

// Route::get('set-subject',function(){
//     return view('subjects.set-subject');
// });

// Route::get('index-categories',function(){
//     return view('categories.index-categories');
// });

// Route::get('add-category',function(){
//     return view('categories.add-category');
// });

// Route::get('update-category',function(){
//     return view('categories.update-category');
// });


// Route::get('index-questions',function(){
//     return view('questions.index-questions');
// });

// Route::get('add-question',function(){
//     return view('questions.add-question');
// });

// Route::get('update-question',function(){
//     return view('questions.update-question');
// });

// Route::get('quiz-metadata',function(){
//     return view('quiz.quiz-metadata');
// });

// Route::get('join-class',function(){
//     return view('students.join-class');
// });

// Route::get('index-students',function(){
//     return view('students.index-students');
// });