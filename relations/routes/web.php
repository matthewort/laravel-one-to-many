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

Route::get('/employees', 'MainController@empIndex') //il nome della funzione dell'index (in questo caso empIndex deve essere identica a quella che inseriamo nel MainController ovviamente)
-> name('employees-index');

Route::get('/tasks', 'MainController@taskIndex') //il nome della funzione dell'index (in questo caso empIndex deve essere identica a quella che inseriamo nel MainController ovviamente)
-> name('tasks-index');
