<?php

// constructur
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

$produk1 = new Produk("Astronout", "hitam", "cotten", 70000);
$produk2 = new Produk("Skeleton", "putih", "kain", 50000);
$produk3 = new Produk("Polly Bear", "abu-abu");

var_dump($produk1);
echo "</br>";
echo "label baju: " . $produk1->getLabel();
echo "</br>";
var_dump($produk2);
echo "</br>";
echo "label baju: " . $produk2->getLabel();
echo "</br>";
var_dump($produk3);
