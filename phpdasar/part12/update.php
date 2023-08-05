<?php
    require "functions.php";

    // ambil data dengan id
    $id = $_GET["id"];
    $films = query("SELECT * FROM films WHERE id = $id")[0];

    // cek apakah submit sudah diklik
    if(isset($_POST["submit"])){

        // cek apakah data berhasil diubah
        if( update($_POST) > 0){
            echo "
                <script>
                    alert('data berhasil diubah')
                    document.location.href = 'index.php'
                </script>
            ";
        } else{
            echo "
                <script>
                    alert('data gagal diubah')
                    document.location.href = 'index.php'
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
    <title>Update Data || Admin</title>
</head>
<body>
    <h1>Update Data Film di Nongki Nobar</h1>
    <a href="index.php">Laman Index</a>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $films["id"] ;?>">
        <ul>
            <li>
                <label for="tittle">Tittle :</label>
                <input required type="text" id="tittle" name="tittle"
                value="<?= $films["tittle"] ;?>">
            </li>
            <li>
                <label for="tayang">Tayang :</label>
                <input required type="date" id="tayang" name="tayang"
                value="<?= $films["tayang"] ;?>">
            </li>
            <li>
                <label for="rating">Rating :</label>
                <input required type="number" step="0.1" min="0" max="10" 
                id="rating" name="rating" value="<?= $films["rating"] ;?>">
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <input required type="text" id="gambar" name="gambar"
                value="<?= $films["gambar"] ;?>">
            </li>
            <li>
                <button type="submit" name="submit">Update data</button>
            </li>
        </ul>

    </form>


</body>
</html>