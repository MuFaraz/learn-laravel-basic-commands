<?php

use App\Http\Controllers\userController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'userController@index');
// Route::get('/welcome', function () {
//     $name = request('name');
//     return $name;
// });
Route::get('/welcome', 'userController@welcome');

// Route::get('/profile/{id}', function ($id) {
//     $age = 10;
//     $info=["muhammad","faraz","2","muhammadfaraz991@gmail.com"];
//     return view('profile',['myid'=> $id,'info'=> $info,'age'=>$age]);
// });
Route::get('/profile/{id}', "userController@show");

Route::get('/post', 'postController@create');
Route::get('/postwhere', 'postController@where');

Route::get('/postupdate', 'postController@update');
Route::get('/postdelete', 'postController@delete');
