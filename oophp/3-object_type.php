<?php

// Object Type
class Produk
{
    public  $judul,
        $warna,
        $bahan,
        $harga;

    public function __construct($judul = "judul", $warna = "warna", $bahan = "bahan", $harga = 0)
    {
        $this->judul = $judul;
        $this->warna = $warna;
        $this->bahan = $bahan;
        $this->harga = $harga;
    }

    public function getLabel()
    {
        return "$this->judul,$this->harga";
    }
}

// misal saya ingin mencetak info produk dalam method class
class CetakInfoProduk
{
    // parameter Produk untuk memberikan inisialisasi agar yang dimasukkan adalah objek type Produk
    public function cetak(Produk $produk)
    {
        $str = "{$produk->getLabel()}, dengan warna {$produk->warna} dan bahan {$produk->bahan}";
        return $str;
    }
}
class Coba
{
    public $judul = "saya",
        $warna = "saya",
        $bahan = "saya",
        $harga = 0;
    public function getLabel()
    {
        return "$this->judul,$this->harga";
    }
}

$produk1 = new Produk("Astronout", "hitam", "cotten", 70000);
$produk2 = new Produk("Skeleton", "putih", "kain", 50000);
$coba = new Coba();

echo "label baju: " . $produk1->getLabel();
echo "</br>";
echo "label baju: " . $produk2->getLabel();
echo "</br>";
$cetakProduk1 = new CetakInfoProduk();
echo $cetakProduk1->cetak($produk1);
// echo $cetakProduk1->cetak($coba); // error karena $coba bukan objek type Produk
