<?php

use App\Http\Controllers\AttendantRecordController;
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

// Attendant Record
Route::get('/attendant-record', [AttendantRecordController::class, 'index'],);
Route::post('/attendant-record', [AttendantRecordController::class, 'store'],);
Route::get('/attendant-record/{id}', [AttendantRecordController::class, 'show'],);
