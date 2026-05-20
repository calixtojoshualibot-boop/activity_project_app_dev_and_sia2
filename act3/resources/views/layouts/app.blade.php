<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NBA Cap Vault</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root { --nba-blue: #17408B; --nba-red: #C9082A; }
        body { background: #121212; color: white; font-family: 'Segoe UI', sans-serif; }
        .navbar { background: var(--nba-blue); border-bottom: 4px solid var(--nba-red); }
        .card { background: #1e1e1e; border: 1px solid #333; color: white; transition: 0.3s; }
        .card:hover { border-color: var(--nba-red); }
        .btn-nba { background: var(--nba-red); color: white; }
        .alert-box { position: fixed; top: 80px; right: 20px; z-index: 9999; }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark sticky-top mb-4">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('caps.index') }}">🏀 NBA VAULT</a>
            <form action="{{ route('caps.index') }}" method="GET" class="d-flex w-50">
                <input name="search" class="form-control me-2" type="search" placeholder="Search caps...">
                <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
            <a href="{{ route('caps.create') }}" class="btn btn-light btn-sm">+ NEW</a>
        </div>
    </nav>

    <div class="container">
        @if(session('success')) <div class="alert alert-success alert-box auto-hide">{{ session('success') }}</div> @endif
        @if(session('danger')) <div class="alert alert-danger alert-box auto-hide">{{ session('danger') }}</div> @endif
        
        @yield('content')
    </div>

    <script>
        // JS: Auto-hide alerts and delete confirmation
        document.querySelectorAll('.auto-hide').forEach(el => {
            setTimeout(() => { el.style.display = 'none'; }, 3000);
        });
        function confirmDelete() { return confirm("Are you sure you want to delete this?"); }
    </script>
</body>
</html>