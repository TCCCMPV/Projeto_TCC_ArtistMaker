<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/tutorials', 'TutorialController@ShowTutorials')->name('tutorials');
Route::get('/modules', 'ModuleController@ShowModules')->name('modules');
Route::get('/courses', 'CourseController@ShowCourses')->name('courses');

Route::get('/tutorial/{id}', 'TutorialController@ShowTutorial')->name('tutorial');
Route::view('/tutorials/new-tutorial', 'content.newTutorial')->name('newTutorial');
Route::post('/tutorial/create-tutorial', 'TutorialController@NewTutorial')->name('createTutorial');

//NewTutorial
Route::post('/tutorial/{id}/new-text','TutorialController@NewText')->name('newText');
Route::post('/tutorial/{id}/insert-text','TutorialController@InsertText')->name('insertText');
Route::delete('/tutorial/{id}/delete-text','TutorialController@DeleteText')->name('deleteText');
Route::get('/tutorial/{id}/edit-text','TutorialController@EditText')->name('editText');

Route::post('/tutorial/{id}/new-image','TutorialController@NewImage')->name('newImage');
Route::post('/tutorial/{id}/insert-image','TutorialController@InsertImage')->name('insertImage');
Route::delete('/tutorial/{id}/delete-image','TutorialController@DeleteImage')->name('deleteImage');
Route::view('tutorial/{id}/edit-image','content.tutorialEditImage')->name('editImage');

Route::post('/tutorial/{id}/new-video','TutorialController@NewVideo')->name('newVideo');
Route::post('/tutorial/{id}/insert-video','TutorialController@InsertVideo')->name('insertVideo');
Route::delete('/tutorial/{id}/delete-video','TutorialController@DeleteVideo')->name('deleteVideo');
Route::view('tutorial/{id}/edit-video','content.tutorialEditVideo')->name('editVideo');

Route::view('tutorial/{id}/edit-title', 'content.tutorialEditTitle')->name('editTutorialTitle');
Route::get('tutorial/{id}/edit-thumb','TutorialController@EditThumb')->name('editTutorialThumb');
Route::put('tutorial/{id}/put-thumb','TutorialController@PutThumb')->name('putTutorialThumb');

Route::get('/module/{id}', 'ModuleController@ShowModule')->name('module');
Route::get('/course/{id}', 'CourseController@ShowCourse')->name('course');
/*
Route::get('/gallery', 'GalleryController')->name('Gallery');
Route::get('/user/{id}', 'UserController')->name('User');
Route::get('/profile', 'ProfileController')->name('Profile');
Route::get('/chat', 'ChatController')->name('Chat');

Route::get('/complaint', 'ComplaintController')->name('Complaint');
Route::get('/feedback', 'FeedbackController')->name('Feedback');*/