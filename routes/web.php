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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//~ Route::get('/personas', [App\Http\Controllers\PersonaController::class, 'index'])->name('personas.index');
//~ Route::get('/personas/create', [App\Http\Controllers\PersonaController::class, 'create'])->name('personas.create');



Route::resource('/personas', App\Http\Controllers\PersonaController::class);
/*
|        | GET|HEAD  | personas                | personas.index   | App\Http\Controllers\PersonaController@index                           | web        |
|        | POST      | personas                | personas.store   | App\Http\Controllers\PersonaController@store                           | web        |
|        | GET|HEAD  | personas/create         | personas.create  | App\Http\Controllers\PersonaController@create                          | web        |
|        | GET|HEAD  | personas/{persona}      | personas.show    | App\Http\Controllers\PersonaController@show                            | web        |
|        | PUT|PATCH | personas/{persona}      | personas.update  | App\Http\Controllers\PersonaController@update                          | web        |
|        | DELETE    | personas/{persona}      | personas.destroy | App\Http\Controllers\PersonaController@destroy                         | web        |
|        | GET|HEAD  | personas/{persona}/edit | personas.edit    | App\Http\Controllers\PersonaController@edit                            | web 
*/
//~ Route::resource('/personas', App\Http\Controllers\PersonaController::class)->except(['index','create','store']);
/*
|        | GET|HEAD  | personas/{persona}      | personas.show    | App\Http\Controllers\PersonaController@show                            | web        |
|        | PUT|PATCH | personas/{persona}      | personas.update  | App\Http\Controllers\PersonaController@update                          | web        |
|        | DELETE    | personas/{persona}      | personas.destroy | App\Http\Controllers\PersonaController@destroy                         | web        |
|        | GET|HEAD  | personas/{persona}/edit | personas.edit    | App\Http\Controllers\PersonaController@edit                            | web 
*/

//~ Route::resource('/personas', App\Http\Controllers\PersonaController::class)->only(['index','create','store']);

/*
|        | GET|HEAD  | personas                | personas.index   | App\Http\Controllers\PersonaController@index                           | web        |
|        | POST      | personas                | personas.store   | App\Http\Controllers\PersonaController@store                           | web        |
|        | GET|HEAD  | personas/create         | personas.create  | App\Http\Controllers\PersonaController@create                          | web        |

*/
