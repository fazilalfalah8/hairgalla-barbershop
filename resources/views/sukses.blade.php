<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Pesanan Diterima — Hairgalla</title>
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

  <section id="hero" class="animate-fade">
    <div class="hero-tag">Konfirmasi Pesanan</div>
    <div class="gold-divider"></div>
    <h1>Pesanan<br>Diterima.</h1>
    <p>Terima kasih telah mempercayai Hairgalla. Kami akan segera konfirmasi via WhatsApp dalam waktu dekat.</p>
    <a href="/" class="btn-gold">Kembali ke Beranda</a>
    <a href="/layanan" class="btn-outline">Lihat Layanan Lain</a>
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