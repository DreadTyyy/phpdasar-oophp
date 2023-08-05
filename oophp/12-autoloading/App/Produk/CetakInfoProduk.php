<?php
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
