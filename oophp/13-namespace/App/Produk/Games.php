<?php
class Games extends Produk implements CetakProduk
{
    public $waktuMain;

    public function getHarga()
    {
        return $this->harga;
    }
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
