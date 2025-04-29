<?php
require_once 'MenuMakanan.php';

class Pesanan
{
  public $daftarMakanan = [];

  public function tambahMakanan(MenuMakanan $makanan)
  {
    $this->daftarMakanan[] = $makanan;
  }

  public function hitungTotal()
  {
    $total = 0;
    foreach ($this->daftarMakanan as $makanan) {
      $total += $makanan->harga;
    }
    return $total;
  }
}

// Data menu tersedia
$menuTersedia = [
  "nasi_goreng" => new MenuMakanan("Nasi Goreng", "Makanan", 15000),
  "ayam_bakar" => new MenuMakanan("Ayam Bakar", "Makanan", 18000),
  "es_teh" => new MenuMakanan("Es Teh", "Minuman", 5000),
  "jus_alpukat" => new MenuMakanan("Jus Alpukat", "Minuman", 8000),
  "bakso" => new MenuMakanan("Bakso", "Makanan", 12000),
  "sate_ayam" => new MenuMakanan("Sate Ayam", "Makanan", 16000),
];
