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

Route::get('/', function(){
	return view('welcome');
});


	Route::group(['middleware' => 'auth','prefix' => 'admin'],  function(){
		Route::resource('users','usersController');

		//DOCTORES
		Route::resource('doctores','doctoresController');
		
		//PACIENTES
		Route::resource('pacientes','pacientesController');

		//CITAS
		Route::resource('citas', 'citasController');
		//RUTA PARA ELIMINAR USUARIO 
		Route::get('users/{id}/destroy', [
			'uses' => 'usersController@destroy',
			'as' => 'admin.users.destroy'
		]);


});

Route::get('admin/auth/login', [ 'uses' => 'Auth\AuthController@getLogin', 'as' => 'admin.auth.login']
	);

Route::post('admin/auth/login', [ 'uses' => 'Auth\AuthController@postLogin', 'as' => 'admin.auth.login']
	);


Route::get('admin/auth/logout', [ 'uses' => 'Auth\AuthController@getLogout', 'as' => 'admin.auth.logout']
	);
//RUTAS DE REGISTRO
// Registration routes...
Route::get('admin/auth/register', ['uses' => 'Auth\AuthController@getRegister' , 'as' => 'admin.auth.register']);

Route::post('admin/auth/register',  'Auth\AuthController@postRegister');