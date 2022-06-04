<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SubscriptionController;

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

Route::controller(PostController::class)->prefix('post')->group(function () {
    Route::post('/', 'create');
});
Route::controller(SubscriptionController::class)->prefix('subscription')->group(function () {
    Route::post('/', 'create');
});
Route::get('/', function () {
    return "hello";
});
