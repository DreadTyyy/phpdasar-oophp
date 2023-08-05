<?php
    // misal ada data mahasiswa
    // membuat array didalam array
    $students = [
        ["Adib", "M012", "Matematika", "2022"],
        ["Haidar", "B010", "Teknik Industri", "2022"],
        ["Zaky", "K011", "Fisika", "2022"]
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
        <li>Nama : <?php echo $student[0]; ?></li>
        <li>NIM : <?php echo $student[1]; ?></li>
        <li>Jurusan : <?php echo $student[2]; ?></li>
        <li>Angkatan : <?php echo $student[3]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>