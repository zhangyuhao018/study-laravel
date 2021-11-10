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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'welcome',['website'=>'Laravel']);
Route::view('/welcome', 'welcome',['website'=>'Laravel学院']);

Route::get('hello',function(){
    return 'hello welcome to laravelAcademy.org';
});

Route::match(['get','post'],'foo',function(){
    return 'this is a request from get or post';
});

Route::any('bar',function(){
    return 'this is a request from any HTTP verb';
});

Route::get('form',function(){
    return '<form method = "POST" action="/foo">' . '<button type="submit"> 提交</button></form?';
});


// Route::get('/user', 'UsersController@index');