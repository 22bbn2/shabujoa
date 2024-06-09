@extends('layouts.app')

@section('content')
<style>
    .flex {
        display: flex;
        justify-content: space-between;
    }
</style>

<div class="container">
    <div class="flex">
        <h1>게시글 목록</h1>
        <a href="{{ route('community.create') }}" class="btn btn-primary mb-3 float-right">게시글 작성</a>
    </div>
    <div class="list-group mt-3">
        @foreach($posts as $post)
        <a href="{{ route('community.show', ['id' => $post->id]) }}" class="list-group-item list-group-item-action">
            <h5>{{ $post->title }}</h5>
            <p>작성자 : {{ $post->writerId }}({{ $post->writerName }})</p>
            <p>{{ $post->contents }}</p>
            <small>작성일: {{ $post->created_at->format('Y-m-d') }}</small>
        </a>
        @endforeach
    </div>
    <div class="d-flex justify-content-center mt-3">
        {{ $posts->links('pagination::bootstrap-4') }}
    </div>
</div>


@if (session('success'))
    <script>
        alert('{{ session('success') }}');
    </script>
@endif

@if (session('error'))
    <script>
        alert('{{ session('error') }}');
    </script>
@endif

@endsection