<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PortfolioController;
// use App\Http\Controllers\MessagesController;


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
// 	$nombre = 'Jorge';
// 	return view('home')->with('nombr', $nombre);
// })->name('home');



Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');


// Route::get('/portfolio', 'ProjectController'); Esta manera era en Laravel 7.xx
Route::get('/portfolio', 'ProjectController@index')->name('projects.index');
Route::get('/portfolio/crear', 'ProjectController@create')->name('projects.create');
// Route::get('/portfolio/crear', 'ProjectController@create')->name('projects.create')->middleware('auth');

Route::get('/portfolio/{id}/editar', 'ProjectController@edit')->name('projects.edit');
Route::patch('/portfolio/{id}', 'ProjectController@update')->name('projects.update');

Route::post('/portfolio', 'ProjectController@store')->name('projects.store');
Route::get('/portfolio/{id}', 'ProjectController@show')->name('projects.show');

Route::delete('/portfolio/{id}', 'ProjectController@destroy')->name('projects.destroy');


// Route::resource('proyectos', ProjectController::class); esta ruta resource es para que se generen todas las rutas, de index, create, delete, etc.

Route::view('/contact', 'contact')->name('contact');
Route::post('/contact', 'MessageController@store')->name('contactoPost');


Auth::routes();

///ROLES
Route::get('/role/crear', 'RoleController@create')->name('roles.create');
Route::post('/role', 'RoleController@store')->name('roles.store');


///CLASES
Route::get('/clase', 'ClaseController@index')->name('clases.index');


