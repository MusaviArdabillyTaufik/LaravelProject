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


Route::get('/', function () {
    return view('index');
});

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/member', function () {
//     return view('memberslayout');
// });

Route::get('/', 'PageController@landingPage');

Route::get('/csgo', 'PageController@csgo');

Route::get('/pubg', 'PageController@pubg');


Route::get('/loginForm','PageController@loginform')->name('loginForm');

Route::post('/login', 'UserController@login')->name('login.user');

Route::get('/registerForm','PageController@registerForm');

Route::post('/register', 'UserController@register')->name('register.user');

Route::get('/logout', 'UserController@logout');


Route::group(['middleware' => 'auth'], function(){

	Route::get('/members', 'Member@index');

	Route::get('/members/export', 'Member@export');

	Route::get('/addMemberForm', 'PageController@addMemberForm');

	Route::post('/addMember', 'Member@addMember')->name('add.Member');

	Route::get('/editMemberForm/{id}', 'PageController@editMemberForm');

	Route::post('/editMember/{id}', 'Member@editMember')->name('edit.Member');

	Route::get('/deleteMember/{id}', 'Member@deleteMember')->name('delete.Member');

	Route::get('/search', 'Member@index');
});

