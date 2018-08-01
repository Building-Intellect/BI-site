<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('welcome');
});

Route::get('clients', 'ClientController@getClients');

Route::get('contact', 'ContactController@create');

Route::post('contact', 'ContactController@send');

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');

Route::get('email', function() {
	Mail::send('email.test', ['name' => 'TestParam'], function($message) {
        $message->from('noreply@buildingintellect.com');
		$message->to('chikn42@gmail.com', 'Building Intellect')->subject('Site Contact: ');
	});
});

//Clear all cache values:
Route::get('clear-cache', function() {
    $exitCode1 = Artisan::call('cache:clear');
    $exitCode2 = Artisan::call('route:clear');
    $exitCode3 = Artisan::call('view:clear');
    $exitCode4 = Artisan::call('config:cache');
    return '<h1>Facade, Routes, Views, and Config cache values cleared</h1>';
});
