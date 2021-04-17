<?php

use Illuminate\Support\Facades\Route;

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
*/

Route::get('/', function () {
    return view('visitorform.index');
});

Route::resource('/units', UnitController::class);
Route::resource('/visitors', VisitorController::class);
Route::resource('/visitorlogs', VisitorLogController::class);
Route::get('/visitorlogs/search/unitno', [VisitorLogController::class, 'search']);
Route::resource('/visitorform', VisitorFormController::class);
