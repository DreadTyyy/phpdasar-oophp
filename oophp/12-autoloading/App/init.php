<?php

// require 'Produk/CetakProduk.php';
// require 'Produk/Produk.php';
// require 'Produk/Komik.php';
// require 'Produk/Games.php';
// require 'Produk/CetakInfoProduk.php';


// mengambil semua file yang ada di folder Produk dengan ekstension akhir .php

spl_autoload_register(function ($class) {
    require_once 'Produk/' . $class . '.php';
});
