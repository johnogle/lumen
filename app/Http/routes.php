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

/*$app->get('/', function() use ($app) {
    return $app->welcome();
});
*/

class Flower extends Illuminate\Database\Eloquent\Model {



}

$app->get('create/{type}', function($type) use ($app) {


	
	$flower = new Flower;
	$flower->type = $type;
	$flower->save();
	

    return 'flower type:' .$type. ' (maybe) saved Suky 19 Jun PM';
});

$app->get('flower/{id}', function($id) {

	return Flower::findOrFail($id);
});
