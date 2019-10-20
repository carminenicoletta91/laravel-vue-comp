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
Route::get('/',function(){
  return redirect('/home');
});
Route::get('/home','EmployeeController@index')->name('empl.index');
Route::get('/show/{id}','EmployeeController@show')->name('empl.show');
Route::get('/employee/{id}/showposts','EmployeeController@showposts')->name('empl.posts.show');
Route::get('/employee/showpost{id}/comments','EmployeeController@showpostcomments')->name('empl.postcomm.show');
Route::post('/employee/comment/store','EmployeeController@store')->name('empl.comment.store');
