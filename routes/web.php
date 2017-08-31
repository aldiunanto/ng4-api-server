<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->group(['prefix' => 'api'], function() use($app){
	$app->get('employee', 'Employee@index');
	$app->get('employee/show/{em_id}', 'Employee@show');
	$app->get('employee/is-duplicate/{em_nik}', 'Employee@isDuplicate');

	$app->post('employee/store', 'Employee@store');
});
