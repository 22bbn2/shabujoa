<?
// app/Repositories/PostRepository.php

namespace App\Repositories;

use App\Models\Post;

class PostRepository
{
    public function create($data)
    {
        // 게시물을 생성하는 데이터베이스 로직을 구현합니다.
        return Post::create($data);
    }

    public function update($postId, $data)
    {
        // 게시물을 수정하는 데이터베이스 로직을 구현합니다.
        $post = Post::findOrFail($postId);
        $post->update($data);
        return $post;
    }

    // 다른 데이터베이스 로직 메서드들을 추가할 수 있습니다.
}