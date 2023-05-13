<?php

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['middleware'=>['api', 'checkPassword','changelanguage']],function()
{
    Route::post('get/main',[App\Http\Controllers\Api\categores::class,'index']);
    Route::post('get/store',[App\Http\Controllers\Api\categores::class,'stores']);
    Route::post('get/active',[App\Http\Controllers\Api\categores::class,'active']);
});

