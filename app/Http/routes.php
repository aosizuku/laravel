<?php

use APP\Task;
use Illuminate\Http\Request;

Route::get('/', function () {
return view('tasks');
});


Route::post('/task' function (Request $request) {
//
});

Route::delete('/task/{id}', function ($id) {
//
});
