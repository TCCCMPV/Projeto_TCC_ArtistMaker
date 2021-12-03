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
Route::post('/post/course','CourseController@PostCourse')->name('postCourse');
Route::delete('/course/{id}/delete','CourseController@Delete')->name('deleteCourse');

Route::get('/course/{id}/new-module','CourseController@NewModule')->name('newCourseModule');
Route::post('/course/{id}/insert-module','CourseController@InsertModule')->name('insertCourseModule');
Route::get('/course/module/{id}','CourseController@ShowModule')->name('moduleCourse');
route::delete('/course/module/{id}/delete','CourseController@DeleteModule')->name('deleteCourseModule');

Route::get('/course/{id}/edit-title','CourseController@EditTitle')->name('editCourseTitle');
Route::put('/course/{id}/put-title','CourseController@PutTitle')->name('putCourseTitle');
Route::get('/course/{id}/edit-thumb','CourseController@EditThumb')->name('editCourseThumb');
Route::put('/course/{id}/put-thumb','CourseController@PutThumb')->name('putCourseThumb');

Route::get('/course/module/{id}/edit-title','CourseController@EditModuleTitle')->name('editCourseModuleTitle');
Route::put('/course/module/{id}/put-title','CourseController@PutModuleTitle')->name('putCourseModuleTitle');
Route::get('/course/module/{id}/edit-desc','CourseController@EditModuleDesc')->name('editCourseModuleDesc');
Route::put('/course/module/{id}/put-desc','CourseController@PutModuleDesc')->name('putCourseModuleDesc');
Route::get('/course/module/{id}/edit-thumb','CourseController@EditModuleThumb')->name('editCourseModuleThumb');
Route::put('/course/module/{id}/put-thumb','CourseController@PutModuleThumb')->name('putCourseModuleThumb');

Route::get('/course/module/{id}/new-widget1','CourseController@NewModuleWidget1')->name('newCourseModuleWidget1');
Route::post('/course/module/{id}/new-widget2','CourseController@NewModuleWidget2')->name('newCourseModuleWidget2');
Route::post('/course/module/{id}/insert-widget','CourseController@InsertModuleWidget')->name('insertCourseModuleWidget');
Route::delete('/course/module/{id}/delete-widget','CourseController@DeleteModuleWidget')->name('deleteCourseModuleWidget');

Route::post('/course/module/{id}/new-comment','CommentController@InsertComment')->name('insertCourseModuleComment');
Route::get('/course/module/{id}/edit-comment','CommentController@EditComment')->name('editCourseModuleComment');
Route::put('/course/module/{id}/put-comment','CommentController@PutComment')->name('putCourseModuleComment');
Route::delete('/course/module/{id}/delete-comment','CommentController@DeleteComment')->name('DeleteCourseModuleComment');

Route::post('/course/{id}/new-comment','CommentController@InsertComment')->name('insertCourseComment');
Route::get('/course/{id}/edit-comment','CommentController@EditComment')->name('editCourseComment');
Route::put('/course/{id}/put-comment','CommentController@PutComment')->name('putCourseComment');
Route::delete('/course/{id}/delete-comment','CommentController@DeleteComment')->name('DeleteCourseComment');

/*Module*/

Route::get('/module/{id}','ModuleController@ShowModule')->name('module');
Route::get('/new/module','ModuleController@NewModule')->name('newModule');
route::post('/post/module','ModuleController@PostModule')->name('postModule');

Route::get('/module/{id}/edit-title','ModuleController@EditTitle')->name('editModuleTitle');
Route::put('/module/{id}/put-title','ModuleController@PutTitle')->name('putModuleTitle');

Route::get('/module/{id}/edit-thumb','ModuleController@EditThumb')->name('editModuleThumb');
Route::put('/module/{id}/put-thumb','ModuleController@PutThumb')->name('putModuleThumb');

Route::get('/module/{id}/edit-desc','ModuleController@EditDesc')->name('editModuleDesc');
Route::put('/module/{id}/put-desc','ModuleController@PutDesc')->name('putModuleDesc');

Route::post('/module/{id}/new-comment','CommentController@InsertComment')->name('insertModuleComment');
Route::get('/module/{id}/edit-comment','CommentController@EditComment')->name('editModuleComment');
Route::put('/module/{id}/put-comment','CommentController@PutComment')->name('putModuleComment');
Route::delete('/module/{id}/delete-comment','CommentController@DeleteComment')->name('DeleteModuleComment');

Route::get('/module/{id}/new-widget1','ModuleController@NewWidget1')->name('newModuleWidget1');
Route::post('/module/{id}/new-widget2','ModuleController@NewWidget2')->name('newModuleWidget2');
Route::post('/module/{id}/insert-widget','ModuleController@InsertWidget')->name('insertModuleWidget');
Route::delete('/module/{id}/delete-widget','ModuleController@DeleteWidget')->name('deleteModuleWidget');

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
Route::get('/user/{id}/edit-picture', 'UserController@EditPicture')->name('editUserPicture');
Route::put('/user/{id}/put-picture', 'UserController@PutPicture')->name('putUserPicture');
Route::get('/user/{id}/edit-nick', 'UserController@EditNick')->name('putUserNick');
Route::put('/user/{id}/put-nick', 'UserController@PutNick')->name('putUserNick');


/*
Route::get('/gallery', 'GalleryController')->name('Gallery');
Route::get('/user/{id}', 'UserController')->name('User');
Route::get('/profile', 'ProfileController')->name('Profile');
Route::get('/chat', 'ChatController')->name('Chat');

Route::get('/complaint', 'ComplaintController')->name('Complaint');
Route::get('/feedback', 'FeedbackController')->name('Feedback');*/