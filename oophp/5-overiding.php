<?php

// Overriding, menimpa method pada child class yang ada di parents

class Produk
{
    public  $nama,
        $warna,
        $penerbit,
        $harga;

    public function __construct($nama = "nama", $warna = "warna", $penerbit = "penerbit", $harga = 0)
    {
        $this->nama = $nama;
        $this->warna = $warna;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
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

// Terdapat kondisi dimana di class produk kita memiliki fungsi cektakInfoProduk
// Di child classnya juga memiliki fungsi yang sama
// Bagaimana jika ingin memakai fungsi dari class produk agar bisa berjalan 
// Dengan melakukan {$this->cetakInfoProduct()} tanpa ada problem karena memiliki nama yang sama
// Memecahkan masalah dengan menggunakan method parent:: sehingga

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
