<?php

class Produk
{
    private  $nama,
        $warna,
        $penerbit;
    private $harga;

    public function __construct($nama = "nama", $warna = "warna", $penerbit = "penerbit", $harga = 0)
    {
        $this->nama = $nama;
        $this->warna = $warna;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    public function setNama($nama)
    {
        $this->nama = $nama;
    }
    public function getNama()
    {
        return $this->nama;
    }
    public function setWarna($warna)
    {
        $this->warna = $warna;
    }
    public function getWarna()
    {
        return $this->warna;
    }
    public function setPenerbit($penerbit)
    {
        $this->penerbit = $penerbit;
    }
    public function getPenerbit()
    {
        return $this->penerbit;
    }

    public function getHarga()
    {
        return $this->harga;
    }

    public function getLabel()
    {
        return "$this->nama,$this->harga";
    }
    public function cetakInfoProduk()
    {
        $str = "{$this->getLabel()}, dengan warna {$this->warna} dan diterbitkan {$this->penerbit}";
        return $str;
    }
}

class Komik extends Produk
{
    public $jmlHalaman;
    public function __construct($nama = "nama", $warna = "warna", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0)
    {
        parent::__construct($nama, $warna, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }
    public function cetakInfoProduk()
    {
        $str = "Komik: " . parent::cetakInfoProduk() . " dengan jumlah halaman {$this->jmlHalaman}";
        return $str;
    }
}
class Games extends Produk
{
    public $waktuMain;
    public function __construct($nama = "nama", $warna = "warna", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)
    {
        parent::__construct($nama, $warna, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }
    public function cetakInfoProduk()
    {
        $str = "Games: " . parent::cetakInfoProduk() . " dengan waktu bermain {$this->waktuMain}";
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

$produk1 = new Komik("Attack On Titan", "hitam", "cotten", 70000, 100);
$produk2 = new Games("Outlast", "putih", "kain", 50000, 50);

echo $produk1->cetakInfoProduk();
echo "</br>";
echo $produk2->cetakInfoProduk();
echo "<hr>";
$produk1->harga = 1000;
echo $produk1->getHarga();
echo "<hr>";

echo $produk1->getPenerbit();
