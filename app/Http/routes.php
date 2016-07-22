<?php


Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/objectList', ['middleware' => 'auth',function () {
   echo json_encode(App\Object::all());
}]);