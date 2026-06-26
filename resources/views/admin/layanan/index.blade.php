<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Layanan — Hairgalla Admin</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { background: #111111; color: #F0EDE8; font-family: Arial, sans-serif; }
        .navbar { display: flex; justify-content: space-between; align-items: center; padding: 16px 32px; border-bottom: 1px solid #333; }
        .navbar a { color: #F0EDE8; text-decoration: none; margin-left: 24px; font-size: 13px; letter-spacing: 1px; }
        .content { padding: 40px 32px; }
        h1 { font-size: 22px; letter-spacing: 2px; text-transform: uppercase; margin-bottom: 32px; }
        .btn { background: #F0EDE8; color: #111; padding: 10px 20px; text-decoration: none; font-size: 12px; letter-spacing: 1px; text-transform: uppercase; display: inline-block; margin-bottom: 24px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 12px 16px; text-align: left; border-bottom: 1px solid #333; font-size: 13px; }
        th { color: #888; letter-spacing: 1px; text-transform: uppercase; }
        .btn-sm { background: none; border: 1px solid #555; color: #F0EDE8; padding: 4px 10px; cursor: pointer; font-size: 12px; text-decoration: none; margin-right: 4px; }
        .btn-del { border-color: #555; color: #F0EDE8; }
        .btn-del:hover { border-color: #ff4444; color: #ff4444; }
        .success { background: #1a3a1a; border: 1px solid #2a5a2a; color: #4CAF50; padding: 12px 16px; margin-bottom: 24px; font-size: 13px; }
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
        <h1>Kelola Layanan</h1>

        @if(session('success'))
            <div class="success">{{ session('success') }}</div>
        @endif

        <a href="/admin/layanan/create" class="btn">+ Tambah Layanan</a>

        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Deskripsi</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($layanan as $l)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $l->nama }}</td>
                    <td>Rp {{ number_format($l->harga, 0, ',', '.') }}</td>
                    <td>{{ $l->deskripsi ?? '-' }}</td>
                    <td>{{ $l->aktif ? 'Aktif' : 'Nonaktif' }}</td>
                    <td>
                        <a href="/admin/layanan/{{ $l->id }}/edit" class="btn-sm">Edit</a>
                        <form method="POST" action="/admin/layanan/{{ $l->id }}" style="display:inline;" onsubmit="return confirm('Hapus layanan ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn-sm btn-del">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>