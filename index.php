<?php
$pageTitle = 'to-do-list-Nilamsari';
$todayDate = date('d-m-Y');
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <!-- Cache-busting query untuk menghindari CSS lama tersimpan di browser -->
    <link rel="stylesheet" href="style.css?v=2">
</head>

<body>

<div class="container">
  <header class="header">
    <h1>Jadwal Olahraga</h1>
    <p class="subtitle">Biar makin semangat, catat olahragamu tiap hari~</p>
    <p class="subtitle">Halaman dibuat oleh PHP pada <?= htmlspecialchars($todayDate, ENT_QUOTES, 'UTF-8') ?>.</p>
  </header>

  <div class="add-panel">
    <div class="input-group">
      <label for="dateInput">Tanggal</label>
      <input type="date" id="dateInput" class="date-input" aria-label="Pilih tanggal" />
    </div>

    <div class="input-group">
      <label for="taskInput">Jenis olahraga</label>
      <div class="input-wrapper">
        <input type="text" id="taskInput" placeholder="Misalnya: Jogging 30 menit" autocomplete="off" />
        <button class="add-btn" id="addBtn" type="button">+</button>
      </div>
    </div>

    <p class="hint">Pilih tanggal lalu ketik olahraga yang ingin dijadwalkan.</p>

    <div class="footer-actions">
      <a class="secondary-btn" href="list.php">
        <span class="btn-icon" aria-hidden="true">📋</span>
        <span>Lihat daftar jadwal</span>
      </a>
    </div>
  </div>

  <footer class="footer">
    <small>Jadwal tersimpan secara otomatis (LocalStorage).</small>
  </footer>
</div>

<script src="script.js"></script>

</body>
</html>
