<?php

use App\Http\Controllers\controllerExample;
use App\Http\Controllers\controllerExample3;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [\App\Http\Controllers\webController::class, 'home']);

/*Route::get('/home', [controllerExample::class, 'home']);

Route::get('hom/{id}', [controllerExample3::class, 'index']);*/
