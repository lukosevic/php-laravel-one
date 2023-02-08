<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\HobbyController;
use App\Http\Controllers\MovieController;

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


Route::get('/', [MovieController::class,'index']);
Route::get('/add-movie', [MovieController::class,'addMovie']);

/*
    Sukurti puslapi mano pomegiai su html list - 3 pomegiais
    Ir grazinkit su uri /pomegiai
    */
