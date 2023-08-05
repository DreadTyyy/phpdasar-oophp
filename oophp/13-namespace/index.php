<?php

// agar bisa memiliki 2 class dengan nama yang sama
// Aturan namespace
// namespace Vendor\NameSpace\SubNameSpace
// Vendor: pembuat
// SubNameSpace dibuat apabila ingin membuat sub nama

require 'App/init.php';


$produk1 = new Komik("Attack On Titan", "hitam", "cotten", 70000, 100);
$produk2 = new Games("Outlast", "putih", "kain", 50000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();

use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;

new ServiceUser();
echo "</br>";

new ProdukUser;
