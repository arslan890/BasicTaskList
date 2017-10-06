<?php

use App\Task;
use Illuminate\Http\Request;
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

// This route retreives all the records from the basictasklist database.
Route::get('/', 'TaskController@show');
//This route is used to post/add a new task into the basictasklist database.
Route::post('/task', 'TaskController@insertTask');
//This route is used to delete a task from the basictasklist database.
Route::delete('/task/{task}', 'TaskController@deleteTask');
