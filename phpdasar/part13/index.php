<?php
    // mengambil utility yang ada di functions.php 
    require "functions.php";

    $films = query("SELECT*FROM films ORDER BY id DESC");

    // ambil data sesuai pencarian
    if(isset($_GET["search"])){
        $films = search($_GET["keyword"]);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Nongki Nobar</title>
</head>
<body>
    <h3>Selamat datang, Admin Nongki Nobar</h3>
    <h1>Daftar Film di Nongki Nobar</h1>

    <a href="add.php">Tambah Data Film</a>
    <form action="" method="get">
        <input type="text" name="keyword" size="30" 
        placeholder="search here!" autocomplete="off">
        <button type="submit" name="search">Search</button>
    </form>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>    
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Tittle</th>
            <th>Rating</th>
            <th>Tayang</th>
        </tr>
        <?php 
            $i = 1;
            foreach($films as $film) : 
        ?>
        <tr>
            <td><?= $i;?></td>
            <td>
                <a href="update.php?id=<?=$film["id"]?>">edit</a> |
                <a 
                    href="delete.php?id=<?=$film["id"]?>"
                    <?php $tittle = $film["tittle"];?>
                    onclick="return confirm(
                        'Apakah anda ingin menghapus data <?=$tittle;?> ?'
                        )"
                >hapus</a>
            </td>
            <td>
                <img 
                src="img/<?= $film["gambar"]; ?>" 
                alt="poster"
                width="70">
            </td>
            <td><?= $film["tittle"];?></td>
            <td><?= $film["tayang"];?></td>
            <td><?= $film["rating"];?></td>
        </tr>
        <?php 
            $i++;
            endforeach; 
        ?>
    </table>

</body>
</html>