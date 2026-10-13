<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Kuliner Surabaya')</title>

    {{-- Bootstrap 5 (CSS Framework) lewat CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Nunito+Sans:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --kluwek: #1c1612;  
            --cabai:  #c7281e;   
            --kunyit: #e3a21a;  
            --tulang: #f6f6f3;   
            --abu:    #6b625a;
        }
        body { font-family: 'Nunito Sans', system-ui, sans-serif; background: var(--tulang); color: var(--kluwek); }
        h1, h2, h3, .judul { font-family: 'Alfa Slab One', Georgia, serif; font-weight: 400; letter-spacing: .2px; }

        .navbar-kuliner { background: var(--kluwek); }
        .navbar-kuliner .navbar-brand { font-family: 'Alfa Slab One', Georgia, serif; color: #fff; }
        .navbar-kuliner .nav-link { color: #d9d2ca; font-weight: 600; }
        .navbar-kuliner .nav-link:hover, .navbar-kuliner .nav-link.active { color: var(--kunyit); }

        .btn-cabai { background: var(--cabai); border-color: var(--cabai); color: #fff; font-weight: 700; }
        .btn-cabai:hover, .btn-cabai:focus { background: #a91f16; border-color: #a91f16; color: #fff; }
        .btn-garis { border: 2px solid var(--kluwek); color: var(--kluwek); font-weight: 700; }
        .btn-garis:hover { background: var(--kluwek); color: #fff; }

        .kartu { border: 1px solid #e2ded7; border-radius: .5rem; overflow: hidden; background: #fff; transition: border-color .15s; }
        .kartu:hover { border-color: var(--cabai); }
        .kartu img { aspect-ratio: 4 / 3; object-fit: cover; }
        .tag { display: inline-block; font-size: .8rem; font-weight: 700; color: var(--cabai); border: 1px solid var(--cabai); border-radius: 2rem; padding: .1rem .65rem; }

        .hero { background: var(--kluwek); color: #fff; }
        .hero h1 { font-size: clamp(2.2rem, 5vw, 3.6rem); line-height: 1.1; }
        .hero p { color: #d9d2ca; max-width: 34rem; }
        .hero img { border-radius: .5rem; border: 4px solid var(--kunyit); aspect-ratio: 4 / 3; object-fit: cover; width: 100%; }

        .detail-img { border-radius: .5rem; aspect-ratio: 4 / 3; object-fit: cover; width: 100%; }
        .bahan li { padding: .35rem 0; border-bottom: 1px dashed #d9d2ca; }
        .fakta { border-left: 5px solid var(--kunyit); background: #fff; }
        footer { background: var(--kluwek); color: #bfb7ae; }
        a:focus-visible, .btn:focus-visible { outline: 3px solid var(--kunyit); outline-offset: 2px; }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-md navbar-kuliner">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">Kuliner Surabaya</a>
            <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse" data-bs-target="#menu"
                    aria-controls="menu" aria-expanded="false" aria-label="Buka menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('kuliner.*') ? 'active' : '' }}" href="{{ route('kuliner.index') }}">Katalog</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="py-4 mt-5">
        <div class="container text-center small">
            Kuliner Surabaya &middot; Tugas PWL Kelompok 5
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>