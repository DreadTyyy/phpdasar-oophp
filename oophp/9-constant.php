<?php
// constant = nilai yang tidak akan berubah

// nama constant, isinya
// define('NAMA', 'Adib Haidar');

// echo NAMA;

// cara menggunakan const
// const UMUR = 18;
// echo UMUR;

// tidak bisa menggunakan define di dalam class

class Constant
{
    const NAMA = "Adib";
}

echo Constant::NAMA;

// Mgic constant 
echo __LINE__; // menampilkan baris
echo __FILE__; // menampilkan tempat file

function coba()
{
    return __FUNCTION__; //menampilkan nama dari function
}
echo coba();

class Coba
{
    public $kelas = __CLASS__; // menampilkan nama dari class
}
$coba = new Coba;
echo $coba->kelas;
