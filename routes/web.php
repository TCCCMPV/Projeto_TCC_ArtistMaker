<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');/*

Route::get('/tutorial/{id}', 'TutorialController')->name('Tutorial');
Route::get('/module', 'ModuleController')->name('Module');
Route::get('/course', 'CourseController')->name('Course');

Route::get('/gallery', 'GalleryController')->name('Gallery');
Route::get('/user/{id}', 'UserController')->name('User');
Route::get('/profile', 'ProfileController')->name('Profile');
Route::get('/chat', 'ChatController')->name('Chat');

Route::get('/complaint', 'ComplaintController')->name('Complaint');
Route::get('/feedback', 'FeedbackController')->name('Feedback');*/