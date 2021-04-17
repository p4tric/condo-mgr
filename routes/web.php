<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CarController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\VisitorLogController;
use App\Http\Controllers\VisitorFormController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
use App\Http\Controllers\UserController;

Route::get('/users', [UserController::class, 'index']);
// or
Route::get('/users', 'App\Http\Controllers\UserController@index');

Route::get('/', function () {
    return view('welcome');
});
*/


Route::get('/', function () {
    return view('visitorform.index');
});


Route::resource('/cars', CarController::class);
Route::resource('/students', StudentController::class);
Route::resource('/units', UnitController::class);
Route::resource('/visitors', VisitorController::class);
Route::get('/visitors/search', [VisitorController::class, 'search']);

Route::resource('/visitorlogs', VisitorLogController::class);
Route::resource('/visitorform', VisitorFormController::class);

/*
Route::get('/students', [StudentController::class, 'index']) ;
Route::get('/students/edit/{id}', [StudentController::class, 'edit']) ;
Route::get('/students/show/{id}', [StudentController::class, 'show']) ;
Route::get('/students/create', [StudentController::class, 'create']) ;
Route::post('/students/store', [StudentController::class, 'store']) ;
Route::post('/students/update/{id}', [StudentController::class, 'update']) ;
*/

/*
Route::get('/units', [UnitController::class, 'index']) ;
Route::get('/units/edit/{id}', [UnitController::class, 'edit']) ;
Route::get('/units/show/{id}', [UnitController::class, 'show']) ;
Route::get('/units/create', [UnitController::class, 'create']) ;
Route::post('/units/store', [UnitController::class, 'store']) ;
Route::post('/units/update/{id}', [UnitController::class, 'update']) ;
Route::get('/units/destroy/{id}', [UnitController::class, 'destroy']) ;
*/

/*
Route::get('/', "StudentController@index") ;
Route::get('/edit/{id}', "StudentController@edit") ;
Route::get('/show/{id}', "StudentController@show") ;
Route::get('/create', "StudentController@create") ;
Route::post('/store', "StudentController@store") ;
Route::post('/update/{id}', "StudentController@update") ;
*/
