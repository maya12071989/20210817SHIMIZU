<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;

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

Route::get('/', [PersonController::class, 'index']);
Route::post('/todo/create', [PersonController::class, 'create']);
Route::post('/todo/update', [PersonController::class, 'update']);
Route::post('/todo/delete', [PersonController::class, 'delete']);