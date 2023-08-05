<?php

// abstrak class
// tidak bisa instansiasi 
// yang bisa diintansiasi adalah kelas turunannya
// memiliki minimal 1 method abstrak

abstract class Produk
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
    abstract public function cetakInfoProduk();

    public function cetakInfo()
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
        $str = "Komik: " . parent::cetakInfo() . " dengan jumlah halaman {$this->jmlHalaman}";
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
        $str = "Games: " . parent::cetakInfo() . " dengan waktu bermain {$this->waktuMain}";
        return $str;
    }
}

class CetakInfoProduk
{
    public $daftarProduk = [];

    public function tambahProduk(Produk $produk)
    {
        return $this->daftarProduk[] = $produk;
    }


    public function cetak()
    {
        $str = "DAFTAR PRODUK </br>";

        foreach ($this->daftarProduk as $produk) {
            $str .= "{$produk->cetakInfoProduk()} </br>";
        };
        return $str;
    }
}

$produk1 = new Komik("Attack On Titan", "hitam", "cotten", 70000, 100);
$produk2 = new Games("Outlast", "putih", "kain", 50000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();
