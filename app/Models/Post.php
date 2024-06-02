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

    // 페이지네이션 없이 데이터 가져오기
    public function getPosts($perPage = 10, $page = 1)
    {
        return Post::paginate($perPage, ['*'], 'page', $page);
    }

    // 페이지네이션 없이 데이터 가져오기
    public function getPost($id)
    {
        return Post::findOrFail($id);
    }
}
