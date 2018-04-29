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

//博客列表的相关路由
Route::get('blog','BlogController@getBlogData');

//博客详情的相关路由
Route::get('blog/detail','BlogDetailController@getBlogDetailData');

//问答列表相关路由
Route::get('question','QuestionController@getQuestionData');

//问答详情相关路由
Route::get('question/detail','QuestionDetailController@getQuestionDetailData');

//活动列表相关路由
Route::get('event','EventController@getEventData');

//活动详情相关路由
Route::get('event/detail','EventDetailController@getEventDetailData');

//获取Banner的相关路由
Route::get('banner','BannerController@getBannerList');
