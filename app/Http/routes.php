<?php


Route::get('/', 'WelcomeController@index');

//Route::get('home', 'HomeController@index');
Route::get('/task', 'TaskController@index');


Route::model('tasks', 'Task');
Route::model('catagories', 'Catagory');

Route::bind('tasks', function($value, $route) {
	return App\Task::whereid($value)->first();
});
Route::bind('catagories', function($value, $route) {
	return App\Catagory::whereid($value)->first();
});

Route::resource('catagories', 'CatagoriesController');
Route::resource('tasks', 'TasksController');

Route::resource('catagories.tasks', 'TasksController');


