<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Lokasi — Hairgalla</title>
  <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>

  <!-- HEADER -->
  <header class="animate-fade">
    <p>Hairgalla.pkp</p>
    <nav>
      <a href="/">Beranda</a>
      <a href="/about">About Us</a>
      <a href="/layanan">Layanan</a>
      <a href="/pesan">Pesan</a>
      <a href="/lokasi">Lokasi</a>
    </nav>
  </header>

  <!-- HERO -->
  <section id="hero" class="animate-fade">
    <div class="hero-tag">Temukan Kami</div>
    <div class="gold-divider"></div>
    <h1>Lokasi<br>Hairgalla.</h1>
    <p>Kami berlokasi di Pangkalan Kerinci — mudah ditemukan, nyaman dikunjungi.</p>
  </section>

  <!-- MAPS + INFO -->
  <section class="section reveal">
    <div style="display:grid; grid-template-columns:1fr 1fr; gap:80px; align-items:start;">

      <!-- KIRI: Maps -->
      <div>
        <div class="section-tag">Peta Lokasi</div>
        <h2 style="margin-bottom:24px;">Hairgalla<br>Barbershop.</h2>
        <div style="border:1px solid #2a2a2a; overflow:hidden;">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.070877575578!2d106.08957157311761!3d-2.12642623711762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e22c10031c9e089%3A0x91a1ece36fdb055f!2sHairgalla%20Barbershop!5e0!3m2!1sid!2sid!4v1782467595616!5m2!1sid!2sid"
            width="100%"
            height="380"
            style="border:0; display:block; filter:grayscale(30%) contrast(1.1);"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="strict-origin-when-cross-origin">
          </iframe>
        </div>
        <a href="https://maps.app.goo.gl/7x9UZmHpWVWrEHJ17" target="_blank" class="btn-gold" style="margin-top:16px; display:inline-block;">
          Buka di Google Maps →
        </a>
      </div>

      <!-- KANAN: Info -->
      <div style="display:flex; flex-direction:column; gap:32px; padding-top:60px;">

        <div style="display:flex; gap:20px; align-items:flex-start;">
          <div style="width:1px; background:#C9A84C; height:48px; margin-top:4px; flex-shrink:0;"></div>
          <div>
            <div style="font-size:10px; color:#C9A84C; letter-spacing:3px; font-family:Arial,sans-serif; margin-bottom:8px;">ALAMAT</div>
<div style="font-size:14px; color:#F0EDE8; font-family:Arial,sans-serif; line-height:1.8;">Hairgalla Barbershop<br>Jl. Pahlawan 12 Gg. Ikhlas, Kacang Pedang,<br>Kec. Gerunggang, Kota Pangkal Pinang,<br>Bangka Belitung</div>          </div>
        </div>

        <div style="display:flex; gap:20px; align-items:flex-start;">
          <div style="width:1px; background:#C9A84C; height:48px; margin-top:4px; flex-shrink:0;"></div>
          <div>
            <div style="font-size:10px; color:#C9A84C; letter-spacing:3px; font-family:Arial,sans-serif; margin-bottom:8px;">JAM OPERASIONAL</div>
            <div style="font-size:14px; color:#888; font-family:Arial,sans-serif; line-height:1.8;">
              Senin – Sabtu &nbsp;&nbsp; 09.00 – 21.00<br>
              Minggu &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 10.00 – 18.00
            </div>
          </div>
        </div>

        <div style="display:flex; gap:20px; align-items:flex-start;">
          <div style="width:1px; background:#C9A84C; height:48px; margin-top:4px; flex-shrink:0;"></div>
          <div>
            <div style="font-size:10px; color:#C9A84C; letter-spacing:3px; font-family:Arial,sans-serif; margin-bottom:8px;">KONTAK</div>
            <div style="font-size:14px; color:#888; font-family:Arial,sans-serif; line-height:1.8;">
              WhatsApp: +62 813-9506-9206<br>
              <a href="https://wa.me/6281395069206" target="_blank" style="color:#C9A84C; font-size:12px; letter-spacing:1px; text-transform:uppercase; font-family:Arial,sans-serif;">
                Chat Sekarang →
              </a>
            </div>
          </div>
        </div>

        <div style="display:flex; gap:20px; align-items:flex-start;">
          <div style="width:1px; background:#C9A84C; height:48px; margin-top:4px; flex-shrink:0;"></div>
          <div>
            <div style="font-size:10px; color:#C9A84C; letter-spacing:3px; font-family:Arial,sans-serif; margin-bottom:8px;">CARA KESANA</div>
            <div style="font-size:14px; color:#888; font-family:Arial,sans-serif; line-height:1.8;">
              Tersedia parkir kendaraan.<br>
              Bisa diakses dengan motor maupun mobil.<br>
              Cari <span style="color:#F0EDE8;">"Hairgalla Barbershop"</span> di Google Maps.
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="section reveal" style="text-align:center;">
    <div class="section-tag">Siap Berkunjung?</div>
    <h2 style="margin-bottom:16px;">Booking Dulu,<br>Biar Gak Antri.</h2>
    <p style="font-size:14px; color:#888; font-family:Arial,sans-serif; margin-bottom:36px;">Reservasi online hanya butuh 1 menit.</p>
    <a href="/pesan" class="btn-gold">Pesan Sekarang</a>
    <a href="https://wa.me/6281395069206" target="_blank" class="btn-outline" style="margin-left:12px;">Chat WhatsApp</a>
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