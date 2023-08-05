<?php

require 'App/init.php';
// memanggil class dari file lain tanpa menggunakan require


$produk1 = new Komik("Attack On Titan", "hitam", "cotten", 70000, 100);
$produk2 = new Games("Outlast", "putih", "kain", 50000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();
