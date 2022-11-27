<?php

use App\Http\Controllers\LogStatusController;
use App\Http\Controllers\MoistureController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['middleware' => ['guest:api']], function () {
    Route::get('get_log_status', [LogStatusController::class, 'get_log_status']);
    Route::get('get_last_log_status', [LogStatusController::class, 'get_last_log_status']);
    Route::post('store_log_status', [LogStatusController::class, 'store_log_status']);

    Route::get('get_moistures', [MoistureController::class, 'get_moistures']);
    Route::post('store_moisture', [MoistureController::class, 'store_moisture']);
});
