<?php

use Illuminate\Http\Request;

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

Route::get("/api/citys" , 'APICityController@index');
Route::get("/api/city/{id}" , 'APICityController@show');
Route::post("/api/city" , 'APICityController@store');
Route::put("/api/city" , 'APICityController@store');
Route::delete("/api/city/{id}" , 'APICityController@destroy');
Route::post("/api/delivery-times" , 'APIDelivery_TimeController@store');
Route::post("/api/city/{city_id}/delivery-times" , 'APIDelivery_TimeController@delever_in_city');
Route::post("api/city/{city_id}/delivery-dates-times/{number_of_days_to_get}" , 'APIDelivery_TimeController@get_days_number');
