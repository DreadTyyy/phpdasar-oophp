<?php
    require "functions.php";
    // cek apakah submit sudah diklik
    if(isset($_POST["submit"])){

        // cek apakah data berhasil ditambah
        if( add($_POST) > 0){
            echo "
                <script>
                    alert('data berhasil disimpan')
                </script>
            ";
        } else{
            echo "
                <script>
                    alert('data gagal disimpan')
                </script>
            ";
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Data || Admin</title>
</head>
<body>
    <h1>Tambah Data Film di Nongki Nobar</h1>
    <a href="index.php">Laman Index</a>

    <form action="" method="post">
        <ul>
            <li>
                <label for="tittle">Tittle :</label>
                <input required type="text" id="tittle" name="tittle">
            </li>
            <li>
                <label for="tayang">Tayang :</label>
                <input required type="date" id="tayang" name="tayang">
            </li>
            <li>
                <label for="rating">Rating :</label>
                <input required type="number" step="0.1" min="0" max="10" id="rating" name="rating">
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <input required type="text" id="gambar" name="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambah data</button>
            </li>
        </ul>

    </form>


</body>
</html>