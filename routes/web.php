<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommunityController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// 메인 페이지
Route::get('/', function () {
    return view('main');
});

// 사용자 페이지

// 커뮤니티 페이지
Route::get('/community', [CommunityController::class, 'index']);
Route::get('/community/{id}', [CommunityController::class, 'show']);
Route::get('/community/add', [CommunityController::class, 'create']);
Route::post('/community/add', [CommunityController::class, 'store']);
Route::get('/community/edit/{id}', [CommunityController::class, 'edit']);
Route::post('/community/edit/{id}', [CommunityController::class, 'update']);
Route::get('/community/delete/{id}', [CommunityController::class, 'destroy']);

// 회원가입

// 마이페이지

// 게시판

// 관리자 페이지

