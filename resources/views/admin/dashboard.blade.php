<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard — Hairgalla Admin</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { background: #111111; color: #F0EDE8; font-family: Arial, sans-serif; }
        .navbar { display: flex; justify-content: space-between; align-items: center; padding: 16px 32px; border-bottom: 1px solid #333; }
        .navbar a { color: #F0EDE8; text-decoration: none; margin-left: 24px; font-size: 13px; letter-spacing: 1px; }
        .content { padding: 40px 32px; }
        h1 { font-size: 22px; letter-spacing: 2px; text-transform: uppercase; margin-bottom: 32px; }
        .cards { display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; }
        .card { border: 1px solid #333; padding: 24px; }
        .card h3 { font-size: 12px; letter-spacing: 1px; text-transform: uppercase; color: #888; margin-bottom: 12px; }
        .card p { font-size: 36px; font-weight: bold; }
    </style>
</head>
<body>
    <div class="navbar">
        <span style="letter-spacing: 2px; font-weight: bold;">HAIRGALLA ADMIN</span>
        <div>
            <a href="/admin/dashboard">Dashboard</a>
            <a href="/admin/pesanan">Pesanan</a>
            <a href="/admin/layanan">Layanan</a>
            <form method="POST" action="/admin/logout" style="display:inline;">
                @csrf
                <button type="submit" style="background:none; border:none; color:#F0EDE8; cursor:pointer; font-size:13px; letter-spacing:1px; margin-left:24px;">Logout</button>
            </form>
        </div>
    </div>
    <div class="content">
        <h1>Dashboard</h1>
        <div class="cards">
            <div class="card">
                <h3>Total Pesanan</h3>
                <p>{{ $totalPesanan }}</p>
            </div>
            <div class="card">
                <h3>Pending</h3>
                <p>{{ $pending }}</p>
            </div>
            <div class="card">
                <h3>Konfirmasi</h3>
                <p>{{ $konfirmasi }}</p>
            </div>
            <div class="card">
                <h3>Selesai</h3>
                <p>{{ $selesai }}</p>
            </div>
        </div>
    </div>
</body>
</html>