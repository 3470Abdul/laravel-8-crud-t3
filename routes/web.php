<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\employeeController;

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


Route::get('/employee', [employeeController::class, 'index']);
Route::post('/insert', [employeeController::class, 'insert']);
Route::get('/display', [employeeController::class, 'display']);
Route::get('/update/{id}', [employeeController::class, 'update']);
Route::post('/update/{id}', [employeeController::class, 'updateData']);
Route::get('/delete/{id}', [employeeController::class, 'delete']);
