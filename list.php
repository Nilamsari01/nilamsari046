<?php
$pageTitle = 'Daftar Jadwal Olahraga';
$todayDate = date('d-m-Y');
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
  <!-- Cache-busting agar pembaruan CSS langsung terlihat di browser -->
  <link rel="stylesheet" href="style.css?v=2" />
</head>
<body>
  <div class="container">
    <header class="header">
      <h1>Daftar Jadwal Olahraga</h1>
      <p class="subtitle">Lihat jadwal yang sudah kamu simpan. Tandai selesai atau hapus jika sudah selesai.</p>
      <p class="subtitle">Halaman dibuat oleh PHP pada <?= htmlspecialchars($todayDate, ENT_QUOTES, 'UTF-8') ?>.</p>
    </header>

    <div class="list-panel">
      <div class="list-panel-header">
        <button class="secondary-btn" id="sortBtn" type="button">Urutkan Tanggal</button>
      </div>
      <div class="empty-state" id="emptyState">
        <span class="empty-icon">🗓️</span>
        <p>Belum ada jadwal olahraga. Tambahkan di halaman input.</p>
      </div>
      <ul id="list" class="list"></ul>
    </div>

    <div class="footer-actions">
      <button class="primary" id="backBtn" type="button">Kembali ke input</button>
    </div>

    <footer class="footer">
      <small>Tekan item untuk menandai selesai. Klik "Hapus" untuk menghapus.</small>
    </footer>
  </div>

  <script src="script.js"></script>
</body>
</html>
