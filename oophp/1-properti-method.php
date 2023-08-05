<?php

// membuat properti dan method 
// properti adalah data yang merepresentasikan objek
// method adalah perilaku yang dapat dilakukan oleh objek
class Produk
{
    public  $judul = "judul",
        $warna = "warna",
        $bahan = "bahan",
        $harga = 0;

    public function getLabel()
    {
        return "$this->judul,$this->harga";
    }
}

$produk1 = new Produk();
$produk1->judul = "Astronot";
$produk1->warna = "hitam";
$produk1->bahan = "cotten bad";
$produk1->harga = 70000;
var_dump($produk1);
echo "<br>";
echo "label baju: " . $produk1->getLabel();
echo "<br>";

$produk2 = new Produk();
$produk2->judul = "skeleton";
$produk2->warna = "putih";
$produk2->bahan = "kain";
$produk2->harga = 50000;
var_dump($produk2);
echo "</br>";
echo "label baju: " . $produk2->getLabel();
