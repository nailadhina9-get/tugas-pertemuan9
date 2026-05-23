<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">

        <a class="navbar-brand" href="/">
            Perpustakaan
        </a>

        <div class="navbar-nav">
            <a class="nav-link" href="{{ route('kategori.index') }}">
                Kategori
            </a>

            <a class="nav-link"
               href="{{ route('kategori.search', 'programming') }}">
                Cari Programming
            </a>
        </div>

    </div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

</body>
</html>