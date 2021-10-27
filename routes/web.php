<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//--------------------Tutorial-----------------------------

Route::get('/tutorials', 'TutorialController@ShowTutorials')->name('tutorials');

//tutorial

Route::get('/tutorial/{id}', 'TutorialController@ShowTutorial')->name('tutorial');
Route::view('/tutorials/new-tutorial', 'content.newTutorial')->name('newTutorial');
Route::post('/tutorial/create-tutorial', 'TutorialController@NewTutorial')->name('createTutorial');
Route::get('tutorial/{id}/edit-title', 'TutorialController@EditTitle')->name('editTutorialTitle');
Route::get('tutorial/{id}/edit-thumb','TutorialController@EditThumb')->name('editTutorialThumb');
Route::put('tutorial/{id}/put-thumb','TutorialController@PutThumb')->name('putTutorialThumb');
Route::put('tutorial/{id}/put-title','TutorialController@PutTitle')->name('putTutorialTitle');

//imagem

Route::post('/tutorial/{id}/new-image','TutorialController@NewImage')->name('newImage');
Route::post('/tutorial/{id}/insert-image','TutorialController@InsertImage')->name('insertImage');
Route::delete('/tutorial/{id}/delete-image','TutorialController@DeleteImage')->name('deleteImage');
Route::get('tutorial/{id}/edit-image','TutorialController@EditImage')->name('editImage');
Route::put('tutorial/{id}/put-image','TutorialController@PutImage')->name('putImage');


//texto

Route::post('/tutorial/{id}/new-text','TutorialController@NewText')->name('newText');
Route::post('/tutorial/{id}/insert-text','TutorialController@InsertText')->name('insertText');
Route::delete('/tutorial/{id}/delete-text','TutorialController@DeleteText')->name('deleteText');
Route::get('/tutorial/{id}/edit-text','TutorialController@EditText')->name('editText');
Route::put('tutorial/{id}/put-text','TutorialController@PutText')->name('putTutorialText');


//vídeo

Route::post('/tutorial/{id}/new-video','TutorialController@NewVideo')->name('newVideo');
Route::post('/tutorial/{id}/insert-video','TutorialController@InsertVideo')->name('insertVideo');
Route::delete('/tutorial/{id}/delete-video','TutorialController@DeleteVideo')->name('deleteVideo');
Route::view('tutorial/{id}/edit-video','content.tutorialEditVideo')->name('editVideo');


//---------------------Módulo------------------------------

Route::get('/modules', 'ModuleController@ShowModules')->name('modules');
Route::get('/module/{id}', 'ModuleController@ShowModule')->name('module');

//---------------------Curso------------------------------

Route::get('/courses', 'CourseController@ShowCourses')->name('courses');
Route::get('/course/{id}', 'CourseController@ShowCourse')->name('course');



//NewTutorial




/*
Route::get('/gallery', 'GalleryController')->name('Gallery');
Route::get('/user/{id}', 'UserController')->name('User');
Route::get('/profile', 'ProfileController')->name('Profile');
Route::get('/chat', 'ChatController')->name('Chat');

Route::get('/complaint', 'ComplaintController')->name('Complaint');
Route::get('/feedback', 'FeedbackController')->name('Feedback');*/