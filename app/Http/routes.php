<?php

use Autoservice\Http\Entities\County;
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

Route::get('/counties', function ()
{
    $departamentos = County::all();
    return view ('counties')->with(compact('departamentos'));

});

Route::resource('departamentos','CountyController');

Route::resource('ciudades','CityController');


Route::group(['prefix' => 'operations'], function (){

    /**
     *This Route sum many numbers
     */
    Route::get('/sum/{value1}/{value2}', 'OperationController@sum');

    /**
     *This Route subtraction many numbers
     */
    Route::get('/subtraction/{value1}/{value2}', 'OperationController@subtraction');

    /**
     *This Route multiplication many numbers
     */
    Route::get('/multiplication/{value1}/{value2}', 'OperationController@multiplication');

    /**
     *This Route division many numbers
     */
    Route::get('/division/{value1}/{value2}', 'OperationController@division');

});




Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
