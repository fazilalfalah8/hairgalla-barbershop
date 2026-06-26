<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Layanan — Hairgalla Admin</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { background: #111111; color: #F0EDE8; font-family: Arial, sans-serif; }
        .navbar { display: flex; justify-content: space-between; align-items: center; padding: 16px 32px; border-bottom: 1px solid #333; }
        .navbar a { color: #F0EDE8; text-decoration: none; margin-left: 24px; font-size: 13px; letter-spacing: 1px; }
        .content { padding: 40px 32px; max-width: 600px; }
        h1 { font-size: 22px; letter-spacing: 2px; text-transform: uppercase; margin-bottom: 32px; }
        label { font-size: 12px; letter-spacing: 1px; display: block; margin-bottom: 6px; color: #888; }
        input, textarea, select { width: 100%; padding: 10px; background: #1a1a1a; border: 1px solid #333; color: #F0EDE8; margin-bottom: 20px; font-size: 14px; font-family: Arial, sans-serif; }
        textarea { height: 100px; resize: vertical; }
        .btn { background: #F0EDE8; color: #111; padding: 12px 24px; border: none; cursor: pointer; font-size: 12px; letter-spacing: 2px; text-transform: uppercase; }
        .btn-back { color: #888; text-decoration: none; font-size: 13px; margin-left: 16px; }
        .error { color: #ff4444; font-size: 12px; margin-top: -16px; margin-bottom: 16px; }
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
        <h1>Edit Layanan</h1>
        <form method="POST" action="/admin/layanan/{{ $layanan->id }}">
            @csrf
            @method('PATCH')
            <label>Nama Layanan</label>
            <input type="text" name="nama" value="{{ old('nama', $layanan->nama) }}" required>
            @error('nama') <p class="error">{{ $message }}</p> @enderror

            <label>Harga (Rp)</label>
            <input type="number" name="harga" value="{{ old('harga', $layanan->harga) }}" required>
            @error('harga') <p class="error">{{ $message }}</p> @enderror

            <label>Deskripsi</label>
            <textarea name="deskripsi">{{ old('deskripsi', $layanan->deskripsi) }}</textarea>

            <label>Status</label>
            <select name="aktif">
                <option value="1" {{ $layanan->aktif ? 'selected' : '' }}>Aktif</option>
                <option value="0" {{ !$layanan->aktif ? 'selected' : '' }}>Nonaktif</option>
            </select>

            <button type="submit" class="btn">Update</button>
            <a href="/admin/layanan" class="btn-back">Batal</a>
        </form>
    </div>
</body>
</html>