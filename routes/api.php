<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserAPI;
use App\Http\Controllers\API\BikeAPI;
use App\Http\Controllers\API\AssociationAPI;
use App\Http\Controllers\API\EventAPI;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('user')->group(function () {
    Route::get('/get-all', [UserAPI::class, 'index']);
    Route::get('/{id}', [UserAPI::class, 'show']);  
    Route::post('/store', [UserAPI::class, 'store']);
    Route::put('/{id}', [UserAPI::class, 'update']);
    Route::delete('/{id}', [UserAPI::class, 'destroy']);
    Route::get('/search-by-name/{name}', [UserAPI::class, 'searchByName']);
    Route::get('/search-by-email/{email}', [UserAPI::class, 'searchByEmail']);
    Route::get('/search-by-phone/{phone}', [UserAPI::class, 'searchByPhone']);
    Route::get('/search-by-city/{city}', [UserAPI::class, 'searchByCity']);
    
});


Route::prefix('bike')-> group(function () {
    Route::get('/get-all', [BikeAPI::class, 'index']);
    Route::get('/{id}', [BikeAPI::class, 'show']);  
    Route::post('/store', [BikeAPI::class, 'store']);
    Route::put('/{id}', [BikeAPI::class, 'update']);
    Route::delete('/{id}', [BikeAPI::class, 'destroy']);
    Route::get('/filter-by-name/{name}', [BikeAPI::class, 'filterByName']);
    
});

Route::prefix('association')-> group(function () {
    Route::get('/get-all', [AssociationAPI::class, 'index']);
    Route::get('/{id}', [AssociationAPI::class, 'show']);  
    Route::post('/store', [AssociationAPI::class, 'store']);
    Route::put('/{id}', [AssociationAPI::class, 'update']);
    Route::delete('/{id}', [AssociationAPI::class, 'destroy']);
    Route::get('/filter-by-name/{name}', [AssociationAPI::class, 'filterByName']);
    
});

Route::prefix('event')-> group(function () {
    Route::get('/get-all', [EventAPI::class, 'index']);
    Route::get('/{id}', [EventAPI::class, 'show']);  
    Route::post('/store', [EventAPI::class, 'store']);
    Route::put('/{id}', [EventAPI::class, 'update']);
    Route::delete('/{id}', [EventAPI::class, 'destroy']);
    Route::get('/filter-by-name/{name}', [EventAPI::class, 'filterByName']);
    
});