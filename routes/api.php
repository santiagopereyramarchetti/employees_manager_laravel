<?php

use App\Http\Controllers\Api\EmployeeController;
use App\Http\Controllers\Api\EmployeeDataController;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/employees/countries',[EmployeeDataController::class, 'countries']);
Route::get('/employees/{country}/states',[EmployeeDataController::class, 'states']);
Route::get('/employees/{state}/cities',[EmployeeDataController::class, 'cities']);
Route::get('/employees/deparments',[EmployeeDataController::class, 'deparments']);

Route::apiResource('employees', EmployeeController::class);
