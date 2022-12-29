<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PassportController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\EmployeeController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', [PassportController::class, 'login']);
Route::middleware('auth:api')->get('/all',[PassportController::class, 'users']);


Route::middleware('auth:api')->get('/jumlah',[PostController::class, 'getRecord']);

Route::middleware('auth:api')->get('/getkaryawan',[EmployeeController::class, 'getEmployee']);
