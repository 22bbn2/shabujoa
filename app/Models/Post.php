<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
