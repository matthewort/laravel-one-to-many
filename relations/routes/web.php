<?php

use Illuminate\Support\Facades\Route;

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

// ROUTE EMPLOYEES
Route::get('/emps', 'MainController@empIndex') //il nome della funzione dell'index (in questo caso empIndex deve essere identica a quella che inseriamo nel MainController ovviamente)
-> name('emp-index');
Route::get('/emp/{id}', 'MainController@empShow')
-> name('emp-show');

// ROUTE TASKS
Route::get('/tasks', 'MainController@taskIndex')
-> name('task-index');

Route::get('/task/create', 'MainController@taskCreate') 
-> name('task-create');
Route::post('/task/store', 'MainController@taskStore') 
-> name('task-store');

Route::get('/task/edit/{id}', 'MainController@taskEdit') 
-> name('task-edit');
Route::post('/task/update/{id}', 'MainController@taskUpdate') 
-> name('task-update');

Route::get('/task/{id}', 'MainController@taskShow') 
-> name('task-show');

// ROUTE TYPES
Route::get('/types', 'MainController@typeIndex')
-> name('type-index');

Route::get('/type/create', 'MainController@typeCreate') 
-> name('type-create');
Route::post('/type/store', 'MainController@typeStore') 
-> name('type-store');

Route::get('/type/edit/{id}', 'MainController@typeEdit') 
-> name('type-edit');
Route::post('/type/update/{id}', 'MainController@typeUpdate') 
-> name('type-update');

Route::get('/type/{id}', 'MainController@typeShow') 
-> name('type-show');

