<?php

use App\Http\Controllers\AudioTechController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/get-audio-tech', [AudioTechController::class, 'get']);
Route::post('/create-audio-tech', [AudioTechController::class, 'create']);
Route::post('/delete-audio-tech', [AudioTechController::class, 'delete']);
Route::get('/edit-audio-tech', [AudioTechController::class, 'edit']);
Route::post('/update-audio-tech', [AudioTechController::class, 'update']);
