<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});


Route::get('home' , function(){


	return View::make('home');

});

Route::get('services' , function(){


	return View::make('services');

});

Route::get('projects' , 'ProjectsController@index');
Route::get('/staircases' , 'ProjectsController@staircases');
Route::get('/interior-handrails' , 'ProjectsController@interiorhandrails');
Route::get('/glass-handrails' , 'ProjectsController@glasshandrails');
Route::get('/countertops' , 'ProjectsController@countertops');
Route::get('/entry-gates' , 'ProjectsController@entrygates');
Route::get('/custom-fabrication' , 'ProjectsController@customfab');
Route::get('/furniture' , 'ProjectsController@furniture');

Route::get('contact' , 'ContactController@showForm');

Route::post('contact' , 'ContactController@handleFormPost');