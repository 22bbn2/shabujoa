@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('community.index') }}" class="btn btn-secondary mb-3">목록으로</a> 
    <div class="mb-3 mt-3 border bg-white rounded p-3">        
        <h1 class="display-4">게시물 작성</h1>
        <form action="{{ route('community.store') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-10">
                    <div class="form-group">
                        <label for="title">제목</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <div class="form-group">
                        <label for="content">내용</label>
                        <textarea class="form-control" id="contents" name="contents" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">작성하기</button>
                </div>
            </div>
        </form>
    </div>
</div>

@if (session('success'))
    <script>
        alert('{{ session('success') }}');
        window.location.href = "{{ route('community.index') }}";
    </script>
@endif

@if (session('error'))
    <script>
        alert('{{ session('error') }}');
    </script>
@endif

@endsection

@section('script')
<script>

</script>
@endsection
