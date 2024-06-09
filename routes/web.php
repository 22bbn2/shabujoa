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
// Route::resource('name', NameOfController::class); 와 같이 리소스 컨트롤러 사용해서 풀면 아래처럼 안써도 됨
Route::get('/community', [CommunityController::class, 'index'])->name('community.index');
Route::get('/community/add', [CommunityController::class, 'create'])->name('community.create');
Route::post('/community/add', [CommunityController::class, 'store'])->name('community.store');
Route::get('/community/{id}', [CommunityController::class, 'show'])->name('community.show');

Route::get('/community/edit/{id}', [CommunityController::class, 'edit'])->name('community.edit');
Route::post('/community/edit/{id}', [CommunityController::class, 'update'])->name('community.update');
Route::get('/community/delete/{id}', [CommunityController::class, 'delete'])->name('community.delete');

// 회원가입

// 마이페이지

// 게시판

// 관리자 페이지

