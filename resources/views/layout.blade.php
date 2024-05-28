<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My App')</title>
    <!-- 부트스트랩 CSS 링크 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- 네비게이션 바 -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">My App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                    <!-- 추가적인 네비게이션 항목을 여기에 추가할 수 있습니다. -->
                </ul>
            </div>
        </div>
    </nav>

    <!-- 컨텐츠 영역 -->
    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- 푸터 -->
    <footer class="bg-dark text-light text-center py-3">
        <div class="container">
            &copy; 2024 My App
        </div>
    </footer>

    <!-- 부트스트랩 자바스크립트 및 필수 스크립트 -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-PBH1vDwHVHLBfz+0vEJwqcYwQ8yG1pRnrXj0bf6osUVw6A1nZ69K0zS2jiqTev/Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-jL5ihx1GpvRTXkA64+oOYwFk9oBv+N0l4S8p0zMJWt5Xf9HhLGFRu9keMRtTD3Yf" crossorigin="anonymous"></script>
</body>
</html>