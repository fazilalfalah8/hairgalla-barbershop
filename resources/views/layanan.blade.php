<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Layanan — Hairgalla</title>
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
    <div class="hero-tag">Semua Layanan</div>
    <div class="gold-divider"></div>
    <h1>Layanan<br>Kami.</h1>
    <p>Dari potongan dasar hingga perawatan eksklusif — semua tersedia untuk Anda.</p>
  </section>

  <!-- LAYANAN -->
  <section class="section reveal">
    <div class="section-tag">Layanan Reguler</div>
    <h2>Pilih Layanan</h2>
    <div class="kartu-grid">

      <div class="kartu">
        <div class="kartu-num">01</div>
        <h3>Basic Cut</h3>
        <p>Potongan standar rapi dan bersih untuk tampilan sehari-hari.</p>
        <div class="kartu-price">Rp 40.000</div>
        <a href="/pesan?layanan=Basic Cut" class="kartu-btn">Pesan →</a>
      </div>

      <div class="kartu">
        <div class="kartu-num">02</div>
        <h3>Premium Package</h3>
        <p>Potong + cuci rambut + styling. Paket terlengkap untuk tampil maksimal.</p>
        <div class="kartu-price">Rp 55.000</div>
        <a href="/pesan?layanan=Premium Package" class="kartu-btn">Pesan →</a>
      </div>

      <div class="kartu">
        <div class="kartu-num">03</div>
        <h3>Exclusive Package 1</h3>
        <p>Full grooming package dengan perawatan premium lengkap.</p>
        <div class="kartu-price">Rp 75.000</div>
        <a href="/pesan?layanan=Exclusive Package 1" class="kartu-btn">Pesan →</a>
      </div>

      <div class="kartu">
        <div class="kartu-num">04</div>
        <h3>Exclusive Package 2</h3>
        <p>Premium package ditambah beard treatment dan hot towel.</p>
        <div class="kartu-price">Rp 95.000</div>
        <a href="/pesan?layanan=Exclusive Package 2" class="kartu-btn">Pesan →</a>
      </div>

      <div class="kartu">
        <div class="kartu-num">05</div>
        <h3>Exclusive 3</h3>
        <p>Paket eksklusif dengan layanan tambahan pilihan.</p>
        <div class="kartu-price">Rp 70.000</div>
        <a href="/pesan?layanan=Exclusive 3" class="kartu-btn">Pesan →</a>
      </div>

      <div class="kartu">
        <div class="kartu-num">06</div>
        <h3>Kids Cut</h3>
        <p>Potongan khusus anak-anak usia 2–12 tahun, sabar dan ramah.</p>
        <div class="kartu-price">Rp 35.000</div>
        <a href="/pesan?layanan=Kids Cut" class="kartu-btn">Pesan →</a>
      </div>

      <div class="kartu">
        <div class="kartu-num">07</div>
        <h3>Hair Mask</h3>
        <p>Perawatan intensif untuk rambut rusak dan kering.</p>
        <div class="kartu-price">Rp 50.000</div>
        <a href="/pesan?layanan=Hair Mask" class="kartu-btn">Pesan →</a>
      </div>

      <div class="kartu">
        <div class="kartu-num">08</div>
        <h3>Creambath</h3>
        <p>Perawatan rambut dan kulit kepala dengan cream nutrisi pilihan.</p>
        <div class="kartu-price">Rp 65.000</div>
        <a href="/pesan?layanan=Creambath" class="kartu-btn">Pesan →</a>
      </div>

      <div class="kartu">
        <div class="kartu-num">09</div>
        <h3>Face Treatment</h3>
        <p>Perawatan wajah untuk kulit bersih dan segar.</p>
        <div class="kartu-price">Rp 40.000</div>
        <a href="/pesan?layanan=Face Treatment" class="kartu-btn">Pesan →</a>
      </div>

      <div class="kartu">
        <div class="kartu-num">10</div>
        <h3>Coloring</h3>
        <p>Pewarnaan rambut profesional dengan bahan berkualitas.</p>
        <div class="kartu-price">Start from Rp 75.000</div>
        <a href="/pesan?layanan=Coloring" class="kartu-btn">Pesan →</a>
      </div>

      <div class="kartu">
        <div class="kartu-num">11</div>
        <h3>Perming / Keriting</h3>
        <p>Teknik perming modern untuk tampilan keriting natural.</p>
        <div class="kartu-price">Start from Rp 250.000</div>
        <a href="/pesan?layanan=Perming Keriting" class="kartu-btn">Pesan →</a>
      </div>

      <div class="kartu">
        <div class="kartu-num">12</div>
        <h3>Bleaching</h3>
        <p>Pemutihan rambut profesional untuk hasil warna cerah maksimal.</p>
        <div class="kartu-price">Start from Rp 150.000</div>
        <a href="/pesan?layanan=Bleaching" class="kartu-btn">Pesan →</a>
      </div>

    </div>
  </section>

  <!-- MEMBER -->
  <section class="section reveal">
    <div class="section-tag">Keanggotaan Eksklusif</div>
    <h2>Member Hairgalla</h2>
    <div class="member-grid">

      <div class="member-card gold">
        <div class="member-tier">Gold Member</div>
        <h3>GOLD</h3>
        <div class="member-price">Rp 449.000 <span style="font-size:12px; color:#888;">/ 6 bulan</span></div>
        <ul class="member-features">
          <li>Unlimited Haircut</li>
          <li>Hair Wash & Styling</li>
          <li>Hair Tonic + Pomade</li>
          <li>Hot Towel + Massage</li>
          <li>Prioritas Tanpa Antri</li>
        </ul>
        <a href="/pesan?layanan=Gold Member" class="btn-gold" style="margin-top:8px; font-size:10px; padding:11px 24px;">Daftar Sekarang →</a>
        <div class="member-note">Berlaku 6 bulan · Hanya untuk 1 orang · Wajib tunjukan kartu</div>
      </div>

      <div class="member-card platinum">
        <div class="member-tier">Platinum Member</div>
        <h3>PLATINUM</h3>
        <div class="member-price">Rp 750.000 <span style="font-size:12px; color:#666;">/ 6 bulan</span></div>
        <ul class="member-features">
          <li>Unlimited Haircut</li>
          <li>Hair Wash & Styling</li>
          <li>Hair Tonic + Pomade</li>
          <li>Hot Towel + Massage</li>
          <li>Face Mask + Face Wash</li>
          <li>Prioritas Tanpa Antri</li>
          <li>Diskon Produk Grooming</li>
          <li>Free Snack / Drink</li>
        </ul>
        <a href="/pesan?layanan=Platinum Member" class="btn-outline" style="margin-top:8px; font-size:10px; padding:11px 24px; border-color:#888; color:#aaa;">Daftar Sekarang →</a>
        <div class="member-note">Berlaku 6 bulan · Hanya untuk 1 orang · Wajib tunjukan kartu</div>
      </div>

    </div>
  </section>

  <!-- FOOTER -->
  <footer>
    <div class="footer-brand">Hairgalla.pkp</div>
<p>© 2025 Hairgalla Barbershop — Pangkal Pinang &nbsp;|&nbsp; 📍 Jl. Pahlawan 12 Gg. Ikhlas &nbsp;|&nbsp; 📱 +62 813-9506-9206</p>  </footer>

  <script>
    const reveals = document.querySelectorAll('.reveal');
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
        }
      });
    }, { threshold: 0.1 });
    reveals.forEach(el => observer.observe(el));
  </script>

</body>
</html>