@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('community.index') }}" class="btn btn-secondary">목록으로</a> 
    <div class="mb-3 mt-3 border bg-white rounded p-3">        
        <h1 class="display-4">{{ $post->title }}</h1>
        <p class="small">작성자 : {{ $post->writerId }}({{ $post->writerName }})</p>
        <p class="lead">{{ $post->contents }}</p>
        <small class="text-muted">작성일: {{ $post->created_at->format('Y-m-d H:i:s') }}</small><br>
        <small class="text-muted">수정일: {{ $post->updated_at->format('Y-m-d H:i:s') }}</small>
    </div>
    <a href="{{ route('community.edit', ['id' => $post->id]) }}" class="btn btn-warning">수정하기</a> 
    <a href="{{ route('community.delete', ['id' => $post->id]) }}" class="btn btn-danger">삭제하기</a> 
</div>

@endsection
