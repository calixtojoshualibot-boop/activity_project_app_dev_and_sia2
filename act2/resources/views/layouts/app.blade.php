<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NBA Vintage Vault</title>
    <style>
        :root { --nba-blue: #00471b; --nba-red: #c9082a; --dark: #121212; --card: #1e1e1e; }
        body { background-color: var(--dark); color: white; font-family: 'Arial Black', Gadget, sans-serif; margin: 0; padding: 20px; }
        .container { max-width: 1100px; margin: auto; }
        header { text-align: center; border-bottom: 5px solid var(--nba-red); padding-bottom: 20px; margin-bottom: 40px; }
        h1 { font-size: 3em; text-transform: uppercase; color: white; margin: 0; }
        
        .grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 30px; }
        .card { background: var(--card); border: 2px solid #333; border-radius: 10px; overflow: hidden; transition: 0.3s; }
        .card:hover { transform: scale(1.03); border-color: var(--nba-red); }
        
        .cap-img { width: 100%; height: 250px; object-fit: cover; border-bottom: 4px solid var(--nba-red); }
        .card-body { padding: 20px; text-align: center; }
        
        .btn { background: var(--nba-red); color: white; padding: 12px 25px; text-decoration: none; border-radius: 5px; font-weight: bold; display: inline-block; }
        .btn:hover { background: white; color: var(--nba-red); }
        
        .detail-view { display: flex; gap: 50px; background: var(--card); padding: 40px; border-radius: 15px; border-top: 10px solid var(--nba-red); }
        @media (max-width: 768px) { .detail-view { flex-direction: column; } }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>🏀 NBA VINTAGE VAULT</h1>
        </header>
        @yield('content')
    </div>
</body>
</html>