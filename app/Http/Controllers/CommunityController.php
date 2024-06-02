<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\CommunityService;

class CommunityController extends Controller
{   
    protected $communityService;
    
    public function __construct(
        CommunityService $communityService
    )
    {
        $this->communityService = $communityService;
    }
    
    // 커뮤니티 메인 페이지
    public function index()
    {
        // 커뮤니티 메인 페이지를 반환합니다.
        $posts = $this->communityService->getPosts();
        return view('community.main',array('posts' => $posts));
    }

    public function show($id)
    {
        // 커뮤니티 메인 페이지를 반환합니다.
        $post = $this->communityService->getPost($id);
        return view('community.show',array('post' => $post));
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
