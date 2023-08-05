<?php
    // Build-in function
    // fungsi date/time {time(), date(), mktime()}

    // echo date("l, d-m-y");
    
    // time() akan menghitung detik dari tanggal 1-1-1970 hingga sekarang
    // echo time(); 

    // cek 100 hari dari hari ini 20-7-23
    //echo date("l", time()+60*60*24*100); // saturday from 20-7-23
    
    // mktime(0,0,0,0,0)
    // format(jam, menit, detik, bulan, tanggal, tahun)
    echo "I born in ";
    echo date("l", mktime(0,0,0,10,19,2004));
    echo "<br>";

    // cek apakah variabel memiliki nilai?
    $x = false;
    echo empty($x);
    sleep(5); // jeda untuk menjalankan script
    echo empty($x);
    
?>