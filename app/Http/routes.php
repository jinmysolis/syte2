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

//Route::get('/', 'WelcomeController@index');

//Route::get('home', 'HomeController@index');


Route::get('/',[
            'uses'=>'TicketsController@latest', 
            'as'=> 'tickets.latest'
         ]);

Route::get('/populares',[
            'uses'=>'TicketsController@popular', 
            'as'=> 'tickets.popular'
         ]);
Route::get('/pendientes',[
            'uses'=>'TicketsController@open', 
            'as'=> 'tickets.open'
         ]);

Route::get('/tutoriales',[
            'uses'=>'TicketsController@closed', 
            'as'=> 'tickets.closed'
         ]);

Route::get('/solicitud/{id}',[
            'uses'=>'TicketsController@datails', 
            'as'=> 'tickets.datails'
         ]);


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
