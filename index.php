<?php
include 'koneksi.php';

$total_warga = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM warga"));

$total_pengurus = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM pengurus"));

$total_pemasukan = mysqli_fetch_assoc(
    mysqli_query($conn,"SELECT SUM(nominal) as total FROM pemasukan")
)['total'] ?? 0;

$total_pengeluaran = mysqli_fetch_assoc(
    mysqli_query($conn,"SELECT SUM(nominal) as total FROM pengeluaran")
)['total'] ?? 0;

$saldo = $total_pemasukan - $total_pengeluaran;
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>RT Digital</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
AOS.init();
</script>
<script src="assets/js/script.js"></script>
<div id="particles-js"></div>

<script src="https://cdn.jsdelivr.net/npm/particles.js"></script>

</body>

</head>

<body>

<div id="loader">
    <div class="loader-content">
        <h1>RT DIGITAL</h1>
        <div class="spinner"></div>
        <p>Memuat Sistem...</p>
    </div>
</div>

<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg">
<div class="container">
<a class="navbar-brand" href="#">🏠 RT DIGITAL</a>

<ul class="navbar-nav ms-auto">
<li class="nav-item"><a class="nav-link" href="#">Beranda</a></li>
<li class="nav-item"><a class="nav-link" href="#">Pengurus</a></li>
<li class="nav-item"><a class="nav-link" href="#">Kas RT</a></li>
<li class="nav-item"><a class="nav-link" href="#">Pengumuman</a></li>
<li class="nav-item"><a class="nav-link" href="#">Keluhan</a></li>
</ul>
</div>
</nav>

<!-- HERO -->

<section class="hero">

<div class="container">

<div class="row align-items-center">

<div class="col-lg-7">

<h1 data-aos="fade-right">
RT DIGITAL
</h1>

<p data-aos="fade-right" data-aos-delay="200">
Transparansi Keuangan, Pelayanan Warga dan Informasi Lingkungan Dalam Satu Platform Modern.
</p>

<br>

<a href="#" class="btn-hero">
Lihat Kas RT
</a>

</div>

<div class="col-lg-5 text-center">

<img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" width="350">

</div>

</div>

</div>

</section>

<!-- STATISTIK -->

<div class="container stats">

<div class="row g-4">

<div class="col-md-3">
<div class="card-stat">
<h2><?= $total_warga ?></h2>
<p>Total Warga</p>
</div>
</div>

<div class="col-md-3">
<div class="card-stat">
<h2>25</h2>
<p>Kepala Keluarga</p>
</div>
</div>

<div class="col-md-3">
<div class="card-stat">
<h2><?= number_format($saldo) ?></h2>
<p>Saldo Kas</p>
</div>
</div>

<div class="col-md-3">
<div class="card-stat">
<h2><?= $total_pengurus ?></h2>
<p>Pengurus RT</p>
</div>
</div>

</div>

</div>

<!-- PENGURUS -->

<section class="container py-5">

<h2 class="section-title">
Struktur Organisasi RT
</h2>

<div class="row g-4">

<div class="col-md-4">
<div class="pengurus-card">
<img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png">
<h4>Ketua RT</h4>
<p>Ahmad Fauzi</p>
<a href="https://wa.me/6281234567890" class="btn btn-success">WhatsApp</a>
</div>
</div>

<div class="col-md-4">
<div class="pengurus-card">
<img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png">
<h4>Sekretaris</h4>
<p>Siti Rahma</p>
<a href="https://wa.me/6281234567891" class="btn btn-success">WhatsApp</a>
</div>
</div>

<div class="col-md-4">
<div class="pengurus-card">
<img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png">
<h4>Bendahara</h4>
<p>Budi Santoso</p>
<a href="https://wa.me/6281234567892" class="btn btn-success">WhatsApp</a>
</div>
</div>

</div>

</section>

<!-- KEUANGAN -->

<section class="container py-5">

<h2 class="section-title">
Transparansi Kas RT
</h2>

<div class="row g-4">

<div class="col-md-4">
<div class="finance-card income">
<h3>Rp <?= number_format($total_pemasukan) ?></h3>
<p>Total Pemasukan</p>
</div>
</div>

<div class="col-md-4">
<div class="finance-card expense">
<h3>Rp <?= number_format($total_pengeluaran) ?></h3>
<p>Total Pengeluaran</p>
</div>
</div>

<div class="col-md-4">
<div class="finance-card balance">
<h3>Rp <?= number_format($saldo) ?></h3>
<p>Saldo Kas</p>
</div>
</div>

</div>

</section>

<!-- PENGUMUMAN -->

<section class="container py-5">

<h2 class="section-title">
Pengumuman
</h2>

<div class="announcement">
<h5>Kerja Bakti Minggu Pagi</h5>
<p>Seluruh warga diharapkan hadir pukul 07.00 WIB.</p>
</div>

<div class="announcement">
<h5>Rapat Bulanan RT</h5>
<p>Dilaksanakan tanggal 15 Oktober 2026.</p>
</div>

</section>

<!-- KELUHAN -->

<section class="container py-5">

<h2 class="section-title">
Keluhan Warga
</h2>

<form>

<input type="text" class="form-control mb-3" placeholder="Judul Keluhan">

<textarea class="form-control mb-3" rows="5" placeholder="Tulis keluhan anda"></textarea>

<button class="btn btn-primary">
Kirim Keluhan
</button>

</form>

</section>

<!-- MAPS -->

<section class="container py-5">

<h2 class="section-title">
Lokasi RT
</h2>

<div class="ratio ratio-16x9">

<iframe
src="https://maps.google.com/maps?q=jakarta&t=&z=13&ie=UTF8&iwloc=&output=embed">
</iframe>

</div>

</section>

<footer>

<div class="container text-center">

<h3>RT DIGITAL</h3>

<p>
Transparan • Modern • Terintegrasi
</p>

</div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

<script>
AOS.init();
</script>

</body>