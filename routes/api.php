<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

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

Route::get('display-taxi-data/{center_name}', function($center_name) {
    $url = "http://127.0.0.1:8000/api/display-taxis/" . $center_name;
    $response = Http::get($url);
    return $response->json();
});

Route::get('display-marquee-text', function() {
    $response = Http::get('http://127.0.0.1:8000/api/display-marquee-text');
    return $response;
});