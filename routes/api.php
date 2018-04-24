<?php

use Illuminate\Http\Request;

use App\Http\Controllers\NewsController;
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

//资讯的相关路由
Route::get('news','NewsController@getNewsData');

//获取Banner的相关路由
Route::get('banner','BannerController@getBannerList');
