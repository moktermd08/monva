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

Route::get('/', 'HomePage@show');

	use Illuminate\Support\Facades\Notification;
	use App\Notifications\TestEmail;

	Route::get('/test-mail', function (){
		Notification::route('mail', 'nick.gglink@gmail.com')->notify(new TestEmail());
		return 'Sent';
	});
