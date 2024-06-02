@extends('layouts.app')

@section('content')
<div class="container">
    <h1>게시글 목록</h1>
    {{-- <a href="{{ route('community.create') }}" class="btn btn-primary mb-3">게시글 작성</a> --}}
    <div class="list-group mt-3">
        @foreach($posts as $post)
        <a href="{{ route('community.show', ['id' => $post->id]) }}" class="list-group-item list-group-item-action">
            <h5>{{ $post->title }}</h5>
            <p>작성자 : {{ $post->writerId }}({{ $post->writerName }})</p>
            <p>{{ $post->content }}</p>
            <small>작성일: {{ $post->created_at->format('Y-m-d') }}</small>
        </a>
        @endforeach
    </div>
</div>
@endsection