<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AppController;

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

Route::get('/region', [AppController::class, 'getRegion']);
Route::get('/province/{id}', [AppController::class, 'getProvince']);
Route::get('/commune/{id}', [AppController::class, 'getCommune']);
Route::get('/street/{id}', [AppController::class, 'getStreet']);



// Route::resource('region', AppController::class);