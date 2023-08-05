<?php
    // Array
   
    $day = ["Senin", "Selasa", "Rabu"];
    $arr1 = [123, "string", true];

    // Menampilkan Array
    // var_dump($day);
    // echo "<br>";
    // print_r($arr1);
    // echo "<br>";


    // menampilkan satu elemen pada array
    // echo $day[0]; // output: Senin

    // menambahkan elemen baru pada array
    print_r($day);
    $day[] = "Kamis";
    echo "<br>";
    print_r($day);
?>