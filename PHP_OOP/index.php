<?php
require_once 'Pesanan.php';
?>

<!DOCTYPE html>
<html>

<head>
  <title>Pemesanan Makanan Kantin</title>
</head>

<body>
  <h2>Form Pemesanan Makanan Kantin</h2>
  <form method="post" action="proses.php">
    <p>Pilih makanan dan minuman:</p>
    <?php foreach ($menuTersedia as $key => $makanan): ?>
      <label>
        <input type="checkbox" name="menu[]" value="<?= $key ?>">
        <?= $makanan->getInfo(); ?>
      </label><br>
    <?php endforeach; ?>
    <br>
    <input type="submit" name="submit" value="Pesan Sekarang">
  </form>
</body>

</html>