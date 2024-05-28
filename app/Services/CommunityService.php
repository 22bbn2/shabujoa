<?php
// app/Services/CommunityService.php

namespace App\Services;

use App\Models\Post;

class CommunityService
{
    public function createPost($data)
    {
        // 게시물을 생성하는 로직을 구현합니다.
        return Post::create($data);
    }

    public function updatePost($postId, $data)
    {
        // 게시물을 수정하는 로직을 구현합니다.
        $post = Post::findOrFail($postId);
        $post->update($data);
        return $post;
    }

    // 다른 비즈니스 로직 메서드들을 추가할 수 있습니다.
}