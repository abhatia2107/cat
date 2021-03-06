<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PagesController@welcome');

Route::get('/auth/register/verify/{id}/{confirmation_code}','Auth\AuthController@getEmailVerify');


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');


Route::resource('exammocks', 'ExamMocksController');
Route::resource('examsections', 'ExamSectionsController');
Route::resource('examsubtopics', 'ExamSubtopicsController');
Route::resource('examtopics', 'ExamTopicsController');
Route::resource('examtypes', 'ExamTypesController');
Route::resource('logintype', 'LoginTypeController');
Route::resource('masterstatus', 'MasterStatusController');
Route::resource('mockhistory', 'MockHistoryController');
Route::resource('mockhistorydetails', 'MockHistoryDetailsController');
Route::resource('mockquestions', 'MockQuestionsController');
Route::resource('mocksections', 'MockSectionsController');
Route::resource('questionoptions', 'QuestionOptionsController');
Route::resource('questions', 'QuestionsController');
Route::resource('questionstatus', 'QuestionStatusController');
Route::resource('questionstype', 'QuestionsTypeController');
Route::resource('status', 'StatusController');
Route::resource('subexamtypes', 'SubExamTypesController');
Route::resource('templatetype', 'TemplateTypeController');
Route::resource('users', 'UsersController');

Route::resource('contact', 'ContactsController');
Route::resource('article', 'ArticleController');
Route::resource('tag', 'TagController');
Route::resource('subscription', 'SubscriptionController');
Route::resource('category', 'CategoryController');
Route::get('blog', 'ArticleController@blog');
Route::get('news', 'ArticleController@news');
Route::get('event', 'ArticleController@event');
Route::get('announcement', 'ArticleController@announcement');
