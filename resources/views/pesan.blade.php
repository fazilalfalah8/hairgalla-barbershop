<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Pesan — Hairgalla</title>
  <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>

  <!-- HEADER -->
  <header class="animate-fade">
    <p>Hairgalla.pkp</p>
    <nav>
      <a href="/">Beranda</a>
      <a href="/lokasi">Lokasi</a>
      <a href="/about">About Us</a>
      <a href="/layanan">Layanan</a>
      <a href="/pesan">Pesan</a>
    </nav>
  </header>

  <!-- HERO -->
  <section id="hero" class="animate-fade">
    <div class="hero-tag">Reservasi</div>
    <div class="gold-divider"></div>
    <h1>Booking<br>Sekarang.</h1>
    <p>Pilih layanan, tentukan waktu, dan kami siap menyambut Anda.</p>
  </section>

  <!-- FORM -->
  <section id="form-pesan" class="reveal">
    <div style="display:grid; grid-template-columns:1fr 1fr; gap:80px; align-items:start;">

      <!-- KIRI: info -->
      <div>
        <div class="section-tag">Reservasi</div>
        <h2 style="margin-bottom:20px;">Booking<br>Mudah & Cepat.</h2>
        <p style="font-size:14px; color:#888; font-family:Arial,sans-serif; line-height:1.9; margin-bottom:32px;">
          Isi form di samping dan kami akan konfirmasi jadwal Anda via WhatsApp dalam waktu dekat.
        </p>
        <div style="display:flex; flex-direction:column; gap:20px;">
          <div style="display:flex; gap:16px; align-items:flex-start;">
            <div style="width:1px; background:#2a2a2a; height:40px; margin-top:4px;"></div>
            <div>
              <div style="font-size:10px; color:#C9A84C; letter-spacing:3px; font-family:Arial,sans-serif; margin-bottom:4px;">JAM OPERASIONAL</div>
              <div style="font-size:13px; color:#888; font-family:Arial,sans-serif;">Senin – Sabtu: 09.00 – 21.00</div>
              <div style="font-size:13px; color:#888; font-family:Arial,sans-serif;">Minggu: 10.00 – 18.00</div>
            </div>
          </div>
          <div style="display:flex; gap:16px; align-items:flex-start;">
            <div style="width:1px; background:#2a2a2a; height:40px; margin-top:4px;"></div>
            <div>
              <div style="font-size:10px; color:#C9A84C; letter-spacing:3px; font-family:Arial,sans-serif; margin-bottom:4px;">LOKASI</div>
              <div style="font-size:13px; color:#888; font-family:Arial,sans-serif;">Jl. Contoh No. 1</div>
              <div style="font-size:13px; color:#888; font-family:Arial,sans-serif;">Pangkalan Kerinci</div>
            </div>
          </div>
          <div style="display:flex; gap:16px; align-items:flex-start;">
            <div style="width:1px; background:#2a2a2a; height:40px; margin-top:4px;"></div>
            <div>
              <div style="font-size:10px; color:#C9A84C; letter-spacing:3px; font-family:Arial,sans-serif; margin-bottom:4px;">WHATSAPP</div>
              <div style="font-size:13px; color:#888; font-family:Arial,sans-serif;">0812-xxxx-xxxx</div>
            </div>
          </div>
        </div>
      </div>

      <!-- KANAN: form -->
      <div class="form-wrapper" style="max-width:100%;">
        <form action="/pesan" method="POST">
          @csrf

          @if ($errors->any())
            <div style="background:#111; border:1px solid #8B0000; padding:16px; margin-bottom:24px;">
              <ul style="list-style:none; color:#cc4444; font-size:12px; font-family:Arial,sans-serif;">
                @foreach ($errors->all() as $error)
                  <li style="margin-bottom:4px;">— {{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" name="nama" placeholder="Masukkan nama Anda"/>
          </div>

          <div class="form-group">
            <label>Nomor WhatsApp</label>
            <input type="text" name="whatsapp" placeholder="08xx-xxxx-xxxx"/>
          </div>

          <div class="form-group">
            <label>Pilih Layanan</label>
            <select name="layanan">
              <option value="">-- Pilih layanan --</option>
              <option value="Basic Cut" {{ request('layanan') == 'Basic Cut' ? 'selected' : '' }}>Basic Cut — Rp 40.000</option>
              <option value="Premium Package" {{ request('layanan') == 'Premium Package' ? 'selected' : '' }}>Premium Package — Rp 55.000</option>
              <option value="Exclusive Package 1" {{ request('layanan') == 'Exclusive Package 1' ? 'selected' : '' }}>Exclusive Package 1 — Rp 75.000</option>
              <option value="Exclusive Package 2" {{ request('layanan') == 'Exclusive Package 2' ? 'selected' : '' }}>Exclusive Package 2 — Rp 95.000</option>
              <option value="Exclusive 3" {{ request('layanan') == 'Exclusive 3' ? 'selected' : '' }}>Exclusive 3 — Rp 70.000</option>
              <option value="Kids Cut" {{ request('layanan') == 'Kids Cut' ? 'selected' : '' }}>Kids Cut — Rp 35.000</option>
              <option value="Hair Mask" {{ request('layanan') == 'Hair Mask' ? 'selected' : '' }}>Hair Mask — Rp 50.000</option>
              <option value="Creambath" {{ request('layanan') == 'Creambath' ? 'selected' : '' }}>Creambath — Rp 65.000</option>
              <option value="Face Treatment" {{ request('layanan') == 'Face Treatment' ? 'selected' : '' }}>Face Treatment — Rp 40.000</option>
              <option value="Coloring" {{ request('layanan') == 'Coloring' ? 'selected' : '' }}>Coloring — Start from Rp 75.000</option>
              <option value="Perming Keriting" {{ request('layanan') == 'Perming Keriting' ? 'selected' : '' }}>Perming / Keriting — Start from Rp 250.000</option>
              <option value="Bleaching" {{ request('layanan') == 'Bleaching' ? 'selected' : '' }}>Bleaching — Start from Rp 150.000</option>
              <option value="Gold Member" {{ request('layanan') == 'Gold Member' ? 'selected' : '' }}>Gold Member — Rp 449.000</option>
              <option value="Platinum Member" {{ request('layanan') == 'Platinum Member' ? 'selected' : '' }}>Platinum Member — Rp 750.000</option>
            </select>
          </div>

          <div class="form-group">
            <label>Tanggal & Jam</label>
            <input type="datetime-local" name="jadwal"/>
          </div>

          <div class="form-group">
            <label>Catatan (opsional)</label>
            <textarea name="catatan" placeholder="Contoh: mau model undercut, referensi ada di Instagram..."></textarea>
          </div>

          <button type="submit" class="btn-submit">Kirim Pesanan →</button>
        </form>
      </div>

    </div>
  </section>

  <!-- FOOTER -->
  <footer>
    <div class="footer-brand">Hairgalla.pkp</div>
<p>© 2025 Hairgalla Barbershop — Pangkal Pinang &nbsp;|&nbsp; 📍 Jl. Pahlawan 12 Gg. Ikhlas &nbsp;|&nbsp; 📱 +62 813-9506-9206</p>  </footer>

  <script>
    document.body.style.opacity = '0';
    window.addEventListener('load', () => {
      document.body.style.transition = 'opacity 0.4s ease';
      document.body.style.opacity = '1';
    });

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
        }
      });
    }, { threshold: 0.08 });

    document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

    document.querySelectorAll('nav a, .btn-gold, .btn-outline').forEach(link => {
      link.addEventListener('click', function(e) {
        const href = this.getAttribute('href');
        if (href && href.startsWith('/')) {
          e.preventDefault();
          document.body.style.transition = 'opacity 0.3s ease';
          document.body.style.opacity = '0';
          setTimeout(() => window.location.href = href, 300);
        }
      });
    });
  </script>

</body>
</html>