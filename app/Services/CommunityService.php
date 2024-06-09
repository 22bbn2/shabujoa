<?php
// app/Services/CommunityService.php

namespace App\Services;

use App\Models\Post;

class CommunityService
{
    public function createPost($data)
    {
        // 게시물을 생성하는 로직을 구현합니다.
        return Post::createPost($data);
    }

    public function updatePost($postId, $data)
    {
        // 게시물을 수정하는 로직을 구현합니다.
        $post = Post::getPost($postId);
        $post->update($data);
        return $post;
    }

    public function getPosts($perPage = 5, $page = 1)
    {
        // 페이지네이션 처리를 포함한 게시물 목록을 가져오는 로직을 구현합니다.
        return Post::getPosts($perPage, $page);
    }

    public function getPost($id)
    {
        // 페이지네이션 처리를 포함한 게시물 목록을 가져오는 로직을 구현합니다.
        return Post::getPost($id);
    }

    public function deletePost($id)
    {
        // 게시물을 삭제하는 로직을 구현합니다.
        return Post::deletePost($id);
    }

}