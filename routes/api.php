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

//资讯列表的相关路由
Route::get('news','NewsController@getNewsData');

//资讯详情的相关路由
Route::get('news/detail','NewsDetailController@getNewsDetailData');



//获取Banner的相关路由
Route::get('banner','BannerController@getBannerList');
