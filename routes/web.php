<?php

use Illuminate\Support\Facades\Route;

/*-----------------Auth---------------------------------*/

Auth::routes();

/*-----------------Menu---------------------------------*/

Route::get('/', function () {
    return view('menu.welcome');
});
Route::get('/home', 'HomeController@index')->name('home');

/*-----------------Content---------------------------------*/

/*Search*/

Route::get('/search/course','SearchController@ShowCourses')->name('searchCourse');
Route::get('/search/module','SearchController@ShowModules')->name('searchModule');
Route::get('/search/tutorial','SearchController@Showtutorials')->name('searchTutorial');

/*Course*/

Route::get('/course/{id}','CourseController@ShowCourse')->name('course');
Route::get('/new/course','CourseController@NewCourse')->name('newCourse');

/*Module*/

Route::get('/module/{id}','ModuleController@ShowModule')->name('module');
Route::get('/new/module','ModuleController@NewModule1')->name('newModule1');
Route::post('/new2/module','ModuleController@NewModule2')->name('newModule2');
route::post('/post/module','ModuleController@PostModule')->name('postModule');

Route::get('/module/{id}/edit-title','ModuleController@EditTitle')->name('editModuleTitle');
Route::post('/module/{id}/insert-title','ModuleController@InsertTitle')->name('insertModuleTitle');

Route::get('/module/{id}/edit-thumb','ModuleController@EditThumb')->name('editModuleThumb');
Route::post('/module/{id}/insert-thumb','ModuleController@InsertThumb')->name('insertModuleThumb');

Route::post('/module/{id}/new-comment','CommentController@InsertComment')->name('insertModuleComment');
Route::get('/module/{id}/edit-comment','CommentController@EditComment')->name('editModuleComment');
Route::put('/module/{id}/put-comment','CommentController@PutComment')->name('putModuleComment');
Route::delete('/module/{id}/delete-comment','CommentController@DeleteComment')->name('DeleteModuleComment');

Route::get('/module/{id}/new-widget1','ModuleController@NewWidget1')->name('newModuleWidget1');
Route::post('/module/{id}/new-widget2','ModuleController@NewWidget2')->name('newModuleWidget2');
Route::post('/module/{id}/insert-widget','ModuleController@InsertWidget')->name('insertModuleWidget');

/*Tutorial*/

Route::get('/tutorial/{id}','TutorialController@ShowTutorial')->name('tutorial');
Route::get('/new/tutorial','TutorialController@NewTutorial')->name('newTutorial');
Route::post('/post/tutorial','TutorialController@PostTutorial')->name('postTutorial');
Route::delete('/tutorial/{id}/delete','TutorialController@DeleteTutorial')->name('deleteTutorial');

Route::get('/tutorial/{id}/edit-title','TutorialController@EditTitle')->name('editTutorialTitle');
Route::put('/tutorial/{id}/put-title','TutorialController@PutTitle')->name('putTutorialTitle');

Route::get('/tutorial/{id}/edit-thumb','TutorialController@EditThumb')->name('editTutorialThumb');
Route::put('/tutorial/{id}/put-thumb','TutorialController@PutThumb')->name('putTutorialThumb');

Route::get('/tutorial/{id}/new-image','TutorialController@NewImage')->name('newTutorialImage');
Route::post('/tutorial/{id}/insert-image','TutorialController@InsertImage')->name('insertTutorialImage');
Route::delete('/tutorial/{id}/delete-image','TutorialController@DeleteImage')->name('deleteTutorialImage');
Route::get('/tutorial/{id}/edit-image','TutorialController@EditImage')->name('editTutorialImage');
Route::put('/tutorial/{id}/put-image','TutorialController@PutImage')->name('putTutorialImage');

Route::get('/tutorial/{id}/new-text','TutorialController@NewText')->name('newTutorialText');
Route::post('/tutorial/{id}/insert-text','TutorialController@InsertText')->name('insertTutorialText');
Route::delete('/tutorial/{id}/delete-text','TutorialController@DeleteText')->name('deleteTutorialText');
Route::get('/tutorial/{id}/edit-text','TutorialController@EditText')->name('editTutorialText');
Route::put('tutorial/{id}/put-text','TutorialController@PutText')->name('putTutorialText');

Route::get('/tutorial/{id}/new-video','TutorialController@NewVideo')->name('newTutorialVideo');
Route::post('/tutorial/{id}/insert-video','TutorialController@InsertVideo')->name('insertTutorialVideo');
Route::delete('/tutorial/{id}/delete-video','TutorialController@DeleteVideo')->name('deleteTutorialVideo');
Route::get('tutorial/{id}/edit-video','TutorialController@EditVideo')->name('editTutorialVideo');
Route::put('tutorial/{id}/put-video','TutorialController@PutVideo')->name('putTutorialVideo');

Route::post('/tutorial/{id}/new-comment','CommentController@InsertComment')->name('insertTutorialComment');
Route::get('/tutorial/{id}/edit-comment','CommentController@EditComment')->name('editTutorialComment');
Route::put('/tutorial/{id}/put-comment','CommentController@PutComment')->name('putTutorialComment');
Route::delete('/tutorial/{id}/delete-comment','CommentController@DeleteComment')->name('DeleteTutorialComment');

/*-----------------User---------------------------------*/

Route::get('/user/{id}', 'UserController@ShowUser')->name('user');


/*
Route::get('/gallery', 'GalleryController')->name('Gallery');
Route::get('/user/{id}', 'UserController')->name('User');
Route::get('/profile', 'ProfileController')->name('Profile');
Route::get('/chat', 'ChatController')->name('Chat');

Route::get('/complaint', 'ComplaintController')->name('Complaint');
Route::get('/feedback', 'FeedbackController')->name('Feedback');*/