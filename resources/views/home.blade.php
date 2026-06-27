<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Hairgalla Barbershop</title>
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

  <section id="hero-full">
    <div class="hero-overlay"></div>
    <div class="hero-content">
      <div class="gold-divider" style="margin: 0 auto 24px;"></div>
      <p class="hero-sub">Premium Barbershop — Pangkal Pinang</p>
      <div class="hero-buttons">
        <a href="/pesan" class="btn-gold">Pesan Sekarang</a>
        <a href="/layanan" class="btn-outline">Lihat Layanan</a>
      </div>
    </div>
  </section>

  <section class="section reveal" id="about">
    <div style="display:grid; grid-template-columns:1fr 1fr; gap:80px; align-items:center;">
      <div>
        <div class="section-tag">Tentang Kami</div>
        <h2 style="margin-bottom:20px;">Lebih dari<br>Sekadar Cukur.</h2>
        <p style="font-size:14px; color:#888; font-family:Arial,sans-serif; line-height:1.9; margin-bottom:16px;">
          Hairgalla Barbershop hadir untuk pria yang menghargai penampilan dan kenyamanan. Didirikan tahun 2024 dengan visi memberikan pengalaman grooming premium di Pangkal Pinang.
        </p>
        <p style="font-size:14px; color:#888; font-family:Arial,sans-serif; line-height:1.9; margin-bottom:32px;">
          Setiap potongan dikerjakan dengan detail dan presisi oleh barber berpengalaman. Bukan sekadar potong rambut — ini tentang kepercayaan diri Anda.
        </p>
        <div style="display:flex; gap:40px;">
          <div>
            <div style="font-size:28px; color:#C9A84C; font-family:Georgia,serif;">500+</div>
            <div style="font-size:11px; color:#555; letter-spacing:2px; text-transform:uppercase; font-family:Arial,sans-serif; margin-top:4px;">Pelanggan</div>
          </div>
          <div>
            <div style="font-size:28px; color:#C9A84C; font-family:Georgia,serif;">12</div>
            <div style="font-size:11px; color:#555; letter-spacing:2px; text-transform:uppercase; font-family:Arial,sans-serif; margin-top:4px;">Layanan</div>
          </div>
          <div>
            <div style="font-size:28px; color:#C9A84C; font-family:Georgia,serif;">4</div>
            <div style="font-size:11px; color:#555; letter-spacing:2px; text-transform:uppercase; font-family:Arial,sans-serif; margin-top:4px;">Barber Pro</div>
          </div>
        </div>
      </div>
      <div style="display:flex; justify-content:center; align-items:center;">
        <img src="{{ asset('logo.png') }}" alt="Hairgalla Logo"
          style="width:300px; height:300px; object-fit:contain; border-radius:50%; border:1px solid #2a2a2a;"/>
      </div>
    </div>
  </section>

  <section class="section reveal">
    <div class="section-tag">Penawaran Terpilih</div>
    <h2>Promo Spesial</h2>
    <div class="promo-grid">
      <div class="promo-kartu">
        <span class="badge">REGULER</span>
        <h3>Basic Cut</h3>
        <p>Potongan rapi, bersih, dan presisi untuk tampilan sehari-hari.</p>
        <div class="promo-harga"><strong>Rp 40.000</strong></div>
        <a href="/pesan?layanan=Basic Cut" class="btn-gold" style="font-size:10px; padding:10px 20px; margin-top:8px;">Pesan →</a>
      </div>
      <div class="promo-kartu featured">
        <span class="badge">TERLARIS</span>
        <h3>Premium Package</h3>
        <p>Potong + cuci + styling. Paket lengkap untuk penampilan maksimal.</p>
        <div class="promo-harga"><s>Rp 65.000</s><strong>Rp 55.000</strong></div>
        <a href="/pesan?layanan=Premium Package" class="btn-gold" style="font-size:10px; padding:10px 20px; margin-top:8px;">Pesan →</a>
      </div>
      <div class="promo-kartu">
        <span class="badge">EKSKLUSIF</span>
        <h3>Exclusive Package</h3>
        <p>Full grooming experience — potong, cuci, styling, dan perawatan lengkap.</p>
        <div class="promo-harga"><strong>Rp 75.000</strong></div>
        <a href="/pesan?layanan=Exclusive Package 1" class="btn-gold" style="font-size:10px; padding:10px 20px; margin-top:8px;">Pesan →</a>
      </div>
    </div>
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