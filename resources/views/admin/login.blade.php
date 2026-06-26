<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin Login — Hairgalla</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { background: #111111; color: #F0EDE8; font-family: Arial, sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; }
        .box { border: 1px solid #333; padding: 40px; width: 360px; }
        h2 { margin-bottom: 24px; font-size: 20px; letter-spacing: 2px; text-transform: uppercase; }
        label { font-size: 12px; letter-spacing: 1px; display: block; margin-bottom: 6px; }
        input { width: 100%; padding: 10px; background: #1a1a1a; border: 1px solid #333; color: #F0EDE8; margin-bottom: 16px; font-size: 14px; }
        button { width: 100%; padding: 12px; background: #F0EDE8; color: #111; font-weight: bold; letter-spacing: 2px; text-transform: uppercase; border: none; cursor: pointer; }
        .error { color: #ff4444; font-size: 13px; margin-bottom: 16px; }
    </style>
</head>
<body>
    <div class="box">
        <h2>Hairgalla Admin</h2>
        @if(session('error'))
            <p class="error">{{ session('error') }}</p>
        @endif
        <form method="POST" action="/admin/login">
            @csrf
            <label>Email</label>
            <input type="email" name="email" required autofocus>
            <label>Password</label>
            <input type="password" name="password" required>
            <button type="submit">Masuk</button>
        </form>
    </div>
</body>
</html>