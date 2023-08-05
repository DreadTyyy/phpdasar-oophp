<?php
    // mengambil utility yang ada di functions.php 
    require "functions.php";

    $films = query("SELECT*FROM films");
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
                <a href="">edit</a> |
                <a href="">hapus</a>
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