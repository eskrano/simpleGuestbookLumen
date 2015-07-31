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

$app->get('/', function() use ($app) {
    return view('welcomepage');
});

$app->get('/chat',function () use ($app){

	return view('chatpage',['chatData'=>DB::select("SELECT * FROM `Chat` ORDER BY `id` DESC")]);

});

$app->post('/chat',function () use ($app){

	$name = Request::input('name');
	$message = Request::input('message');

	$validator = Validator::make([
		'name'=>$name,

		'message'=>$message

		],
		[
		'name'=>'required|min:3|string|max:20',
		'message'=>'required|min:5|max:2048'

		]);

	if ($validator->fails())
	{
		return view('addresult',['error'=>'Ваше сообщение не прошло проверку']);
	} 

	DB::insert("INSERT INTO `Chat` (`name`,`text`,`published_at`) VALUES(?,?,?)",[$name,$message,Carbon\Carbon::now()]);

	return view('addresult',['success'=>'Сообщение добавлено']);
});