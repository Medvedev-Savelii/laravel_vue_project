<?php

use App\Http\Controllers\Person\IndexController;
use App\Http\Controllers\Person\StoreController;
use App\Http\Controllers\Person\UpdateController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::group(['namespace' => 'Person', 'prefix' => 'people'], function () {
    Route::post('/',[StoreController::class, '__invoke']);
    Route::get('/', [IndexController::class, '__invoke']);
    Route::patch('/{person}', [UpdateController::class, '__invoke']);

});
