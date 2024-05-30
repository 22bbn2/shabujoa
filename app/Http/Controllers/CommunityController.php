<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommunityController extends Controller
{
    public function __construct()
    {
        
    }
    
    // 커뮤니티 메인 페이지
    public function index()
    {
        return view('community');
    }

    public function create()
    {
        return view('community_add');
    }

    public function edit($id)
    {
        // 커뮤니티에서 ID가 $id인 항목을 수정하는 뷰를 반환합니다.
        return view('community_edit', ['id' => $id]);
    }
}
