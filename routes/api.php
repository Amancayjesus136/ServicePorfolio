<?php

use App\Http\Controllers\Api\PresentacionController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/*
|--------------------------------------------------------------------------------------
| API Presentations
|--------------------------------------------------------------------------------------
|
| Below are the routes for managing presentations:
| - List all presentations
| - Create a new presentation
| - View a specific presentation
| - Update an existing presentation
| - Delete a presentation
|
*/

    Route::get('/presentations/list', [PresentacionController::class, 'index']);
    Route::post('/presentations/create', [PresentacionController::class, 'store']);
    Route::get('/presentations/{id}', [PresentacionController::class, 'show']);
    Route::put('/presentations/{id}', [PresentacionController::class, 'update']);
    Route::delete('/presentations/{id}', [PresentacionController::class, 'destroy']);

/*
|---------------------------------------------------------------------------------------
| API Presentations
|--------------------------------------------------------------------------------------
*/

