<?php


$namespace = '\crocodicstudio\dokularavel\Controllers';
Route::group(['middleware'=>['\Illuminate\Session\Middleware\StartSession'],'prefix'=>config('dokularavel.PAYMENT_PATH'),'namespace'=>$namespace], function () {		
	Route::get('/', ['uses'=>'DokuController@index','as'=>'DokuController.index']);
	Route::get('finish', ['uses'=>'DokuController@finish','as'=>'DokuController.finish']);
	Route::post('pay', ['uses'=>'DokuController@pay','as'=>'DokuController.pay']);
	Route::get('debug', ['uses'=>'DokuController@debug','as'=>'DokuController.debug']);
	Route::post('status/{invoice_no}', ['uses'=>'DokuController@checkPaymentStatus','as'=>'DokuController.checkPaymentStatus']);
});