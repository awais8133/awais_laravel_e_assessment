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
    return view('teacher-index');
});

Route::get('create-class',function(){
    return view('class.create-class');
});

Route::get('sign-up',function(){
    return view('auth.sign-up');
});

Route::get('login',function(){
    return view('auth.login');
});

Route::get('add-subject',function(){
    return view('subjects.add-subject');
});

Route::get('set-subject',function(){
    return view('subjects.set-subject');
});

Route::get('index-categories',function(){
    return view('categories.index-categories');
});

Route::get('add-category',function(){
    return view('categories.add-category');
});

Route::get('update-category',function(){
    return view('categories.update-category');
});


Route::get('index-questions',function(){
    return view('questions.index-questions');
});

Route::get('add-question',function(){
    return view('questions.add-question');
});

Route::get('update-question',function(){
    return view('questions.update-question');
});

Route::get('quiz-metadata',function(){
    return view('quiz.quiz-metadata');
});

Route::get('join-class',function(){
    return view('students.join-class');
});

Route::get('index-students',function(){
    return view('students.index-students');
});