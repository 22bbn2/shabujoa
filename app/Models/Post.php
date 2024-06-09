<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Models
use App\Models\User;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'writerId', 'writerName', 'password', 'title', 'contents'
    ];

    // 사용자와의 관계 설정
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // 페이지네이션 처리를 포함한 게시물 목록을 가져오기
    public function getPosts($perPage = 5, $page = 1)
    {
        return Post::orderBy('created_at', 'desc')->paginate($perPage, ['*'], 'page', $page);
    }

    // 게시물 가져오기
    public function getPost($id)
    {
        return Post::findOrFail($id);
    }

    public function createPost($data)
    {
        return Post::create($data);
    }

    // 게시물 삭제
    public function deletePost($id)
    {
        return Post::destroy($id);
    }
}
