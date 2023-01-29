<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PortalController;
use App\Http\Controllers\Api\LocationController;

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

Route::group(['prefix' => 'v1', 'as' => 'v1.'], function () {
    Route::resource('/portals', PortalController::class);

    Route::get('/countries', [LocationController::class, 'getCountries']);
    Route::get('/cities/{id}', [LocationController::class, 'getCities']);
    Route::get('/districts/{id}', [LocationController::class, 'getDistricts']);
    Route::get('/wards/{id}', [LocationController::class, 'getWards']);
});
