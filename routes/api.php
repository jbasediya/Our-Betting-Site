<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BettingController;
use App\Http\Controllers\Api\FeatureController;
use App\Http\Controllers\Api\UserController;


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
Route::get('bettings/{slug}', [BettingController::class, 'getBetting']);
Route::get('betting-features/{slug}', [BettingController::class, 'bettingFeature']);
Route::post('betting-insert', [BettingController::class, 'bettingInsert']);
Route::get('get_country', [BettingController::class, 'get_country']);
Route::post('add_football',[BettingController::class, 'add_football']);

Route::post('fileupload',[UserController::class, 'fileUpload']);
Route::get('getfile',[UserController::class, 'getFile']);
Route::resource('features', FeatureController::class);




