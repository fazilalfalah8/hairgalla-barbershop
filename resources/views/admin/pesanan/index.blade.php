<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pesanan — Hairgalla Admin</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { background: #111111; color: #F0EDE8; font-family: Arial, sans-serif; }
        .navbar { display: flex; justify-content: space-between; align-items: center; padding: 16px 32px; border-bottom: 1px solid #333; }
        .navbar a { color: #F0EDE8; text-decoration: none; margin-left: 24px; font-size: 13px; letter-spacing: 1px; }
        .content { padding: 40px 32px; }
        h1 { font-size: 22px; letter-spacing: 2px; text-transform: uppercase; margin-bottom: 32px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 12px 16px; text-align: left; border-bottom: 1px solid #333; font-size: 13px; }
        th { color: #888; letter-spacing: 1px; text-transform: uppercase; }
        select { background: #1a1a1a; color: #F0EDE8; border: 1px solid #333; padding: 4px 8px; font-size: 12px; }
        .btn-delete { background: none; border: 1px solid #555; color: #F0EDE8; padding: 4px 10px; cursor: pointer; font-size: 12px; }
        .btn-delete:hover { border-color: #ff4444; color: #ff4444; }
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
        <h1>Pesanan Masuk</h1>

        @if(session('success'))
            <div class="success">{{ session('success') }}</div>
        @endif

        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>WhatsApp</th>
                    <th>Layanan</th>
                    <th>Jadwal</th>
                    <th>Catatan</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pesanan as $p)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $p->nama }}</td>
                    <td>{{ $p->whatsapp }}</td>
                    <td>{{ $p->layanan }}</td>
                    <td>{{ $p->jadwal }}</td>
                    <td>{{ $p->catatan ?? '-' }}</td>
                    <td>
                        <form method="POST" action="/admin/pesanan/{{ $p->id }}/status">
                            @csrf
                            @method('PATCH')
                            <select name="status" onchange="this.form.submit()">
                                <option value="pending" {{ $p->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                <option value="konfirmasi" {{ $p->status == 'konfirmasi' ? 'selected' : '' }}>Konfirmasi</option>
                                <option value="selesai" {{ $p->status == 'selesai' ? 'selected' : '' }}>Selesai</option>
                                <option value="batal" {{ $p->status == 'batal' ? 'selected' : '' }}>Batal</option>
                            </select>
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="/admin/pesanan/{{ $p->id }}" onsubmit="return confirm('Hapus pesanan ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn-delete">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div style="margin-top: 24px;">
            {{ $pesanan->links() }}
        </div>
    </div>
</body>
</html>