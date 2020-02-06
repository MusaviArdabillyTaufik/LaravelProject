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

// Route::get('/member', function () {
//     return view('memberslayout');
// });

Route::get('/members', 'Member@index');

Route::get('/addMemberForm', 'Member@addMemberForm');

Route::post('/addMember', 'Member@addMember')->name('add.Member');

Route::get('/editMemberForm/{id}', 'Member@editMemberForm');

Route::post('/editMember/{id}', 'Member@editMember')->name('edit.Member');

Route::get('/deleteMember/{id}', 'Member@deleteMember')->name('delete.Member');