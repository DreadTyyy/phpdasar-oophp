<?php

// Inheritance atau pewarisan
class Produk
{
    public  $judul,
        $warna,
        $bahan,
        $harga,
        $cuaca;

    public function __construct($judul = "judul", $warna = "warna", $bahan = "bahan", $harga = 0, $cuaca = "cuaca")
    {
        $this->judul = $judul;
        $this->warna = $warna;
        $this->bahan = $bahan;
        $this->harga = $harga;
        $this->cuaca = $cuaca;
    }

    public function getLabel()
    {
        return "$this->judul,$this->harga";
    }
}
class Jaket extends Produk
{
    public function cetakInfoProduk()
    {
        $str = "Jaket: {$this->getLabel()}, dengan warna {$this->warna} dan bahan {$this->bahan} cocok ketika cuaca {$this->cuaca}";
        return $str;
    }
}
class Kaos extends Produk
{
    public function cetakInfoProduk()
    {
        $str = "Kaos: {$this->getLabel()}, dengan warna {$this->warna} dan bahan {$this->bahan} cocok ketika cuaca {$this->cuaca}";
        return $str;
    }
}

class CetakInfoProduk
{
    public function cetak(Produk $produk)
    {
        $str = "{$produk->getLabel()}, dengan warna {$produk->warna} dan bahan {$produk->bahan}";
        return $str;
    }
}

$produk1 = new Jaket("Astronout", "hitam", "cotten", 70000, "dingin");
$produk2 = new Kaos("Skeleton", "putih", "kain", 50000, "hangat");

echo $produk1->cetakInfoProduk();
echo "</br>";
echo $produk2->cetakInfoProduk();
