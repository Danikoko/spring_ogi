<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailsController;

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

Route::post('booking', [EmailsController::class, 'bookingemail']);
Route::post('newsletter', [EmailsController::class, 'newsletter']);
Route::post('contact', [EmailsController::class, 'contact']);
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
