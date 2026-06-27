<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>About Us — Hairgalla</title>
  <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>

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

  <section id="hero" class="animate-fade" style="text-align:center;">
    <div class="hero-tag">Tentang Kami</div>
    <div class="gold-divider" style="margin: 20px auto;"></div>
    <h1>Hairgalla<br>Barbershop.</h1>
    <p style="max-width:520px; margin: 0 auto 40px;">Premium barbershop di Pangkal Pinang yang hadir untuk pria yang menghargai penampilan dan kenyamanan.</p>
  </section>

  <section class="section reveal">
    <div style="display:grid; grid-template-columns:1fr 1fr; gap:80px; align-items:center;">
      <div>
        <div class="section-tag">Cerita Kami</div>
        <h2 style="margin-bottom:20px;">Berawal dari<br>Satu Visi.</h2>
        <p style="font-size:14px; color:#888; font-family:Arial,sans-serif; line-height:1.9; margin-bottom:16px;">
          Hairgalla lahir pada tahun 2024 dari keinginan sederhana — menghadirkan pengalaman barbershop premium yang belum ada sebelumnya di Pangkal Pinang.
        </p>
        <p style="font-size:14px; color:#888; font-family:Arial,sans-serif; line-height:1.9;">
          Kami percaya bahwa penampilan adalah investasi. Setiap pelanggan yang duduk di kursi kami berhak mendapatkan pelayanan terbaik, bukan sekadar potongan rambut biasa.
        </p>
      </div>
      <div style="display:flex; justify-content:center;">
        <img src="{{ asset('logo.png') }}" alt="Hairgalla"
          style="width:280px; height:280px; object-fit:contain; border-radius:50%; border:1px solid #2a2a2a;"/>
      </div>
    </div>
  </section>

  <section class="section reveal" style="border-bottom:1px solid #2a2a2a;">
    <div class="section-tag">Dalam Angka</div>
    <h2 style="margin-bottom:40px;">Hairgalla Sejauh Ini</h2>
    <div style="display:grid; grid-template-columns:repeat(4,1fr); gap:1px; background:#2a2a2a; border:1px solid #2a2a2a;">
      <div style="background:#0d0d0d; padding:40px 28px;">
        <div style="font-size:42px; color:#C9A84C; font-family:Georgia,serif; margin-bottom:8px;">2024</div>
        <div style="font-size:10px; color:#555; letter-spacing:3px; text-transform:uppercase; font-family:Arial,sans-serif;">Tahun Berdiri</div>
      </div>
      <div style="background:#0d0d0d; padding:40px 28px;">
        <div style="font-size:42px; color:#C9A84C; font-family:Georgia,serif; margin-bottom:8px;">500+</div>
        <div style="font-size:10px; color:#555; letter-spacing:3px; text-transform:uppercase; font-family:Arial,sans-serif;">Pelanggan</div>
      </div>
      <div style="background:#0d0d0d; padding:40px 28px;">
        <div style="font-size:42px; color:#C9A84C; font-family:Georgia,serif; margin-bottom:8px;">12</div>
        <div style="font-size:10px; color:#555; letter-spacing:3px; text-transform:uppercase; font-family:Arial,sans-serif;">Layanan</div>
      </div>
      <div style="background:#0d0d0d; padding:40px 28px;">
        <div style="font-size:42px; color:#C9A84C; font-family:Georgia,serif; margin-bottom:8px;">4</div>
        <div style="font-size:10px; color:#555; letter-spacing:3px; text-transform:uppercase; font-family:Arial,sans-serif;">Barber Pro</div>
      </div>
    </div>
  </section>

  <section class="section reveal">
    <div class="section-tag">Nilai Kami</div>
    <h2 style="margin-bottom:40px;">Kenapa Hairgalla?</h2>
    <div style="display:grid; grid-template-columns:repeat(3,1fr); gap:1px; background:#2a2a2a; border:1px solid #2a2a2a;">
      <div style="background:#0d0d0d; padding:36px 28px;">
        <div style="font-size:10px; color:#C9A84C; letter-spacing:3px; font-family:Arial,sans-serif; margin-bottom:16px;">01</div>
        <h3 style="font-size:18px; font-weight:normal; margin-bottom:12px;">Presisi & Detail</h3>
        <p style="font-size:13px; color:#666; font-family:Arial,sans-serif; line-height:1.7;">Setiap potongan dikerjakan dengan teliti. Tidak ada yang asal-asalan di sini.</p>
      </div>
      <div style="background:#0d0d0d; padding:36px 28px;">
        <div style="font-size:10px; color:#C9A84C; letter-spacing:3px; font-family:Arial,sans-serif; margin-bottom:16px;">02</div>
        <h3 style="font-size:18px; font-weight:normal; margin-bottom:12px;">Pengalaman Premium</h3>
        <p style="font-size:13px; color:#666; font-family:Arial,sans-serif; line-height:1.7;">Dari suasana hingga pelayanan, semua dirancang untuk kenyamanan Anda.</p>
      </div>
      <div style="background:#0d0d0d; padding:36px 28px;">
        <div style="font-size:10px; color:#C9A84C; letter-spacing:3px; font-family:Arial,sans-serif; margin-bottom:16px;">03</div>
        <h3 style="font-size:18px; font-weight:normal; margin-bottom:12px;">Barber Berpengalaman</h3>
        <p style="font-size:13px; color:#666; font-family:Arial,sans-serif; line-height:1.7;">Tim kami terdiri dari barber terlatih yang passionate di bidangnya.</p>
      </div>
    </div>
  </section>

  <section class="section reveal" style="text-align:center;">
    <div class="section-tag">Bergabung Bersama Kami</div>
    <h2 style="margin-bottom:16px;">Siap Tampil<br>Terbaik?</h2>
    <p style="font-size:14px; color:#888; font-family:Arial,sans-serif; margin-bottom:36px;">Booking sekarang dan rasakan perbedaannya.</p>
    <a href="/pesan" class="btn-gold">Pesan Sekarang</a>
    <a href="/layanan" class="btn-outline" style="margin-left:12px;">Lihat Layanan</a>
  </section>

  <footer>
    <div class="footer-brand">Hairgalla.pkp</div>
    <p>© 2025 Hairgalla Barbershop — Pangkal Pinang &nbsp;|&nbsp; 📍 Jl. Pahlawan 12 Gg. Ikhlas &nbsp;|&nbsp; 📱 +62 813-9506-9206</p>
  </footer>

  <script>
    const currentPath = window.location.pathname;
    document.querySelectorAll('nav a').forEach(link => {
      if (link.getAttribute('href') === currentPath) link.classList.add('active');
    });

    document.body.style.opacity = '0';
    window.addEventListener('load', () => {
      document.body.style.transition = 'opacity 0.4s ease';
      document.body.style.opacity = '1';
    });

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) entry.target.classList.add('visible');
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