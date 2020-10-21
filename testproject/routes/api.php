<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/students',[StudentController::class,'list']);

Route::post('/data',[StudentController::class,'add']);

Route::put('/updates',[StudentController::class,'getdataupdate']);

Route::delete("delete/{id}",[StudentController::class,"delete"]);

Route::delete("search/{name}",[StudentController::class,"search"]);
