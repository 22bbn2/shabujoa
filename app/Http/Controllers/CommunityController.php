<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\CommunityService;

class CommunityController extends Controller
{   
    protected $communityService;
    
    public function __construct(
        Request $request,
        CommunityService $communityService
    )
    {
        $this->communityService = $communityService;
        $this->request = $request;
    }
    
    // 커뮤니티 메인 페이지
    public function index()
    {
        $page = $this->request->input('page', 1);

        // 커뮤니티 메인 페이지를 반환합니다.
        $posts = $this->communityService->getPosts(5, $page);
        
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
        return view('community.add');
    }

    public function store()
    {
        $title = $this->request->input('title');
        $contents = $this->request->input('contents');

        $post = $this->communityService->createPost([
            'title' => $title,
            'contents' => $contents,
            'writerId' => 'testId',
            'writerName' => '테스트이름',
        ]);

        if ($post) {
            // 성공적으로 생성되었음을 세션 플래시 데이터에 저장
            return redirect()->back()->with('success', '글이 정상적으로 작성되었습니다');
        } else {
            // 실패했음을 세션 플래시 데이터에 저장
            return redirect()->back()->with('error', 'Failed to create post.');
        }
    }

    public function edit($id)
    {
        $post = $this->communityService->getPost($id);

        return view('community.edit', ['post' => $post]);
    }

    public function update($id)
    {
        $title = $this->request->input('title');
        $contents = $this->request->input('contents');

        $post = $this->communityService->getPost($id);

        $post = $this->communityService->updatePost($id, [
            'title' => $title,
            'contents' => $contents,
            'writerId' => 'testId',
            'writerName' => '테스트이름',
        ]);

        if ($post) {
            // 성공적으로 생성되었음을 세션 플래시 데이터에 저장
            return redirect()->back()->with('success', '글이 정상적으로 수정되었습니다');
        } else {
            // 실패했음을 세션 플래시 데이터에 저장
            return redirect()->back()->with('error', 'Failed to update post.');
        }
    }

    public function delete($id)
    {
        // 본인이 작성한 게시글인지 확인하는 코드 추가 필요

        $post = $this->communityService->deletePost($id);

        if ($post) {
            // 성공적으로 생성되었음을 세션 플래시 데이터에 저장
            session()->flash('success', '글이 정상적으로 삭제되었습니다');
        } else {
            // 실패했음을 세션 플래시 데이터에 저장
            session()->flash('error', 'Failed to delete post.');
        }

        return redirect()->route('community.index');
    }
}
