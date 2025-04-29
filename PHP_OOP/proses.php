<?php
require_once 'Pesanan.php';

// Proteksi akses langsung (tanpa POST)
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  header("Location: index.php");
  exit;
}

// Validasi jika tidak memilih makanan
if (!isset($_POST['menu']) || empty($_POST['menu'])) {
  echo "<script>alert('Anda belum memesan apapun!'); window.location.href='index.php';</script>";
  exit;
}

// Proses pesanan
$pesanan = new Pesanan();
foreach ($_POST['menu'] as $kodeMakanan) {
  if (isset($menuTersedia[$kodeMakanan])) {
    $pesanan->tambahMakanan($menuTersedia[$kodeMakanan]);
  }
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Detail Pesanan</title>
</head>

<body>
  <h2>Detail Pesanan</h2>
  <ul>
    <?php foreach ($pesanan->daftarMakanan as $makanan): ?>
      <li><?= $makanan->getInfo(); ?></li>
    <?php endforeach; ?>
  </ul>
  <strong>Total: Rp <?= number_format($pesanan->hitungTotal(), 0, ',', '.') ?></strong><br><br>
  <a href="index.php">Kembali</a>
</body>

</html>