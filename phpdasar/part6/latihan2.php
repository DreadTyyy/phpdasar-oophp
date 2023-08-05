<?php
    // $angka = [[1,2,3],[4,5,6],[7,8,9]];
    // echo $angka[1][1]; //output: 5
    // echo "<br>";
    // echo $angka[2][1]; //output: 8

    // assosiative array
    // $students = [
    //     ["Adib", "M012", "Matematika", "2022"],
    //     ["Haidar", "B010", "Teknik Industri", "2022"],
    //     ["Zaky", "K011", "Fisika", "2022"]
    // ]


    // key kita buat sendiri, bukan berdasarkan index
    $students =[
        [
            "gambar" => "adib.JPG",
            "nama" => "Adib",
            "nim" => "M012",
            "jurusan" => "Matematika",
            "angkatan" => 2022
        ],
        [
            "gambar" => "haidar.JPG",
            "nama" => "Haidar",
            "nim" => "B012",
            "jurusan" => "Teknik Industri",
            "angkatan" => 2022
        ]
    ]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach( $students as $student ) : ?>
    <!-- students adalah array luar -->
    <!-- student adalah array didalam students -->
    <ul>
        <li>
            <img src="img/<?= $student["gambar"];?>"
            width="50"
            height="50"/>
        </li>
        <li>Nama : <?= $student["nama"]; ?></li>
        <li>NIM : <?= $student["nim"]; ?></li>
        <li>Jurusan : <?= $student["jurusan"]; ?></li>
        <li>Angkatan : <?= $student["angkatan"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>