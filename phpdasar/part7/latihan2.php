<?php  
    // apabila tidak ada data yang dikirim
    if(!isset($_GET["tittle"]) || 
        !isset($_GET["tayang"]) ||
        !isset($_GET["rating"])
        ){
        // mengembalikan user ke pagenya
        // tidak bisa mengakses latihan2.php
        header("Location: latihan1.php");
        exit;
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nobar Film</title>
</head>
<body>
    <h1>HEHEHE</h1>    
    <ul>
        <!-- menerima data yang dikirim dari latihan1.php -->
        <li><?= $_GET["tittle"];?></li>
        <li><?= $_GET["tayang"];?></li>
        <li><?= $_GET["rating"];?></li>
    </ul>
</body>
</html>