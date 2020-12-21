<?php

Route::get('calculator', function(){
	echo 'Hello Mominur';
});

Route::get('add/{a}/{b}', 'App\packages\Devdojo\Calculator\Src\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'App\packages\Devdojo\Calculator\Src\CalculatorController@subtract');
