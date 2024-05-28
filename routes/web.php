<?php

use Illuminate\Support\Facades\Route;

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

// 회원가입

// 마이페이지

// 게시판

// 관리자 페이지

