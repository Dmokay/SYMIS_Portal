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
    return view('welcome');
});

Route::get('/symisadmin', function () {
    return view('symisadmin');
});

Route::get('/students', 'StudentsController@studentsPage');

Route::get('/parents', 'ParentsController@parentsPage');
    
Route::get('/teachers', 'TeachersController@teachersPage');

Route::get('/principal', 'PrincipalsController@principalsPage');

Route::get('/pta','PtaController@ptaPage');

Route::get('/dashboard', 'PanelController@panelPage');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
