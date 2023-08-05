<?php
class Komik extends Produk implements CetakProduk
{
    public $jmlHalaman;

    public function getHarga()
    {
        return $this->harga;
    }
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
